<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product_Image;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\PurchaseList;
use App\Models\Comment;

class ProductController extends Controller
{
    public function addToCart($id)
    {
        if (!Auth::check()) {
            return response()->json([
                'code' => 401,
                'message' => 'Bạn cần đăng nhập để thêm vào giỏ hàng'
            ], 401);
        }

        $product = Product::find($id);
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        } else {
            $cart[$id] = [
                'id' => $id,  // Add the 'id' of the product to the cart
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->feature_image_path
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'code' => 200,
            'message' => 'Thêm sản phẩm vào giỏ hàng thành công'
        ], 200);
    }


    public function showCart()
    {
        $categorys = Category::where('parent_id', 0)->get();
        $user = Auth::user();
        $carts = session()->get('cart');
        return view('cart.cart', compact('carts', 'user', 'categorys'));
    }
    public function detail($id)
    {
        $user = Auth::user();
        $categorys = Category::where('parent_id', 0)->get();
        $products = Product::find($id);
        $product_imgs = Product_Image::where('product_id', $id)->get();
        $productsRecommend = Product::latest()->take(5)->get();
        return view('details_product.index', compact('categorys', 'products', 'product_imgs', 'productsRecommend', 'user'));
    }
    public function purchase(Request $request)
    {
        $userId = $request->session()->get('user')->id;
        $user = User::find($userId);
        $carts = session()->get('cart');

        if (!$carts) {
            return response()->json(['code' => 400, 'message' => 'Giỏ hàng trống']);
        }

        DB::beginTransaction();

        try {
            foreach ($carts as $item) {
                // Kiểm tra và lấy 'id' sản phẩm từ mảng $item
                if (!isset($item['id'])) {
                    throw new \Exception('Missing product ID in cart item');
                }

                // Tìm sản phẩm theo ID
                $product = Product::find($item['id']);

                // Kiểm tra số lượng tồn kho
                if ($product->max_number < $item['quantity']) {
                    return response()->json(['code' => 400, 'message' => 'Số lượng sản phẩm không đủ trong kho']);
                }

                // Giảm số lượng sản phẩm trong kho
                $product->max_number -= $item['quantity'];
                $product->save();

                // Lưu thông tin mua hàng vào bảng PurchaseList
                $purchase = PurchaseList::create([
                    'name' => $item['name'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'image' => $item['image'],
                    'SDT' => $user->SDT,
                    'Address' => $user->Address,
                    'id_user' => $user->id
                ]);
                Log::info('Added purchase: ', $purchase->toArray());
            }

            // Commit transaction
            DB::commit();

            // Xóa giỏ hàng sau khi mua thành công
            session()->forget('cart');

            return response()->json(['code' => 200, 'message' => 'Mua hàng thành công']);
        } catch (\Exception $e) {
            Log::error('Error in purchase:', ['message' => $e->getMessage()]);
            DB::rollBack();
            return response()->json(['code' => 500, 'message' => 'Có lỗi xảy ra. Vui lòng thử lại sau.']);
        }
    }


    public function search(Request $request)
    {
        $categorys = Category::where('parent_id', 0)->get();
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%{$query}%")->get();
        $user = Auth::user();
        return view('product.search_product', compact('products', 'user', 'categorys'));
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cartComponent = view('cart.components.cart_component', compact('carts'))->render();
            return response()->json(['cart_component' => $cartComponent, 'code' => 200], 200);
        }
    }
    public function deleteCart(Request $request)
    {
        if ($request->id) {
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cartComponent = view('cart.components.cart_component', compact('carts'))->render();
            return response()->json(['cart_component' => $cartComponent, 'code' => 200], 200);
        }
    }
    public function likeProduct($id, Request $request)
    {
        Log::info('-----------------------------');
        $product = Product::findOrFail($id);

        // Retrieve user from session
        $user = $request->session()->get('user');

        if ($user) {
            // Log user and product details for debugging
            Log::info('User ID: ' . $user['id']);
            Log::info('Product ID: ' . $product->id);

            // Check if user has already liked the product
            $hasLiked = User::find($user['id'])->hasLiked($product);

            if ($hasLiked) {
                // Unlike the product
                User::find($user['id'])->unlike($product);
                $product->decrement('like_count'); // Giảm số lượt thích
                Log::info('User unliked product');
            } else {
                // Like the product
                User::find($user['id'])->like($product);
                $product->increment('like_count'); // Tăng số lượt thích
                Log::info('User liked product');
            }

            return response()->json([
                'success' => true,
                'message' => 'Thao tác thành công.',
                'reload' => false,
                'like_count' => $product->like_count // Include like count in the response
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Bạn cần đăng nhập để thực hiện thao tác này.'
            ]);
        }
    }


    public function commentProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'content' => 'required|string|max:255',
        ]);
        $user = $request->session()->get('user');
        if ($user) {
            $comment = new Comment();
            $comment->user_id = Auth::id();
            $comment->content = $request->input('content');

            $product->comments()->save($comment);

            return redirect()->back()->with('success', 'Bình luận đã được thêm.');
        } else {
            return redirect()->back()->with('error', 'Bạn cần đăng nhập để thực hiện thao tác này.');
        }
    }
}
