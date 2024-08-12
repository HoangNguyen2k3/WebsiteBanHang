<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $sliders = Slider::latest()->get();
        $categorys = Category::where('parent_id', 0)->get();
        $products = Product::latest()->take(8)->get();
        if (!$request->session()->has('user')) {
            // Ghi log khi session bị mất
            Log::warning('Session expired or user logged out: ' . $request->fullUrl());
        }
        //  $randomProducts = Product::inRandomOrder()->take(8)->get();
        $randomProducts = Product::oldest()->take(8)->get();
        $productsRecommend = Product::latest('views_count', 'desc')->take(8)->get();
        $user = $request->session()->get('user');
        return view('Home.index', compact('sliders', 'categorys', 'products', 'productsRecommend', 'user', 'randomProducts'));
    }
    public function details_account(Request $request)
    {
        $user = $request->session()->get('user');
        return view('account.detail_account', compact('user'));
    }
    public function update_account(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        // Get the logged-in user's ID
        $userId = $request->session()->get('user')->id;

        // Update user details
        $user = User::find($userId);
        $user->fullname = $request->input('fullname');
        $user->SDT = $request->input('phone');
        $user->Address = $request->input('address');
        $user->save();

        // Update the session data
        $request->session()->put('user', $user);

        // Redirect back with a success message or to a confirmation page
        return redirect()->route('comehome')->with('success', 'Thông tin tài khoản đã được cập nhật thành công.');
    }
}
