<?php

namespace App\Http\Controllers;

use App\Components\Recursive;
use App\Http\Requests\ProductAddRequest;
use App\Models\Category;
use App\Models\Product;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductImage;
use App\Models\ProductTag;
use App\Models\Tag;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    use StoreImageTrait;
    private $category;
    private $product;
    private $productImage;
    private $tag;
    private $producTag;
    public function __construct(
        Category $category,
        Product $product,
        ProductImage $productImage,
        Tag $tag,
        ProductTag $productTag
    ) {
        $this->category = $category;
        $this->product = $product;
        $this->productImage = $productImage;
        $this->tag = $tag;
        $this->producTag = $productTag;
    }
    public function index()
    {
        $products = $this->product->latest()->paginate(5);
        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        $htmlOption = $this->getCategory($parent_id = '');

        return view('admin.product.add', compact('htmlOption'));
    }
    public function getCategory($parent_id)
    {
        $data = $this->category->all();
        $recursive = new Recursive($data);
        $htmlOption = $recursive->CategoriesRecursive($parent_id);
        return $htmlOption;
    }
    public function store(ProductAddRequest $request)
    {

        try {
            DB::beginTransaction();
            $dataProductCreate = [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->contents,
                'user_id' => auth()->id(),
                'category_id' => $request->category_id,
                'max_number' => $request->max_num,
                'Brand' => $request->brand
            ];
            $dataUploadFeatureImage = $this->storageTraitUpload($request, 'feature_image_path', 'product');
            if (!empty($dataUploadFeatureImage)) {
                $dataProductCreate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $product = $this->product->create($dataProductCreate);
            //Insert data to product image
            if ($request->hasFile('Image_path')) {
                foreach ($request->Image_path as $fileItem) {
                    $dataProductImageDetail = $this->StoreImageTraitUploadMutiple($fileItem, 'product');
                    $product->images()->create([
                        'Image_path' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name']
                    ]);
                }
            }
            if (!empty($request->tags)) {
                foreach ($request->tags as $tagItem) {
                    //Insert to tags
                    $tagInstance = $this->tag->firstOrCreate(['name' => $tagItem]);
                    $tagIds[] = $tagInstance->id;
                }
            }

            $product->tags()->attach($tagIds);
            DB::commit();
            return redirect()->route('product.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . 'Line: ' . $exception->getMessage());
        }
    }
    public function edit($id)
    {
        $product = $this->product->find($id);
        $htmlOption = $this->getCategory($product->category_id);
        return view('admin.product.edit', compact('htmlOption', 'product'));
    }
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataProductUpdate = [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->contents,
                'user_id' => auth()->id(),
                'category_id' => $request->category_id,
                'Brand' => $request->brand,
                'max_number' => $request->max_num,
            ];
            $dataUploadFeatureImage = $this->storageTraitUpload($request, 'feature_image_path', 'product');
            if (!empty($dataUploadFeatureImage)) {
                $dataProductUpdate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductUpdate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $this->product->find($id)->update($dataProductUpdate);
            $product = $this->product->find($id);
            //Insert data to product image
            if ($request->hasFile('Image_path')) {
                $this->productImage->where('product_id', $id)->delete();
                foreach ($request->Image_path as $fileItem) {
                    $dataProductImageDetail = $this->StoreImageTraitUploadMutiple($fileItem, 'product');
                    $product->images()->create([
                        'Image_path' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name']
                    ]);
                }
            }
            if (!empty($request->tags)) {
                foreach ($request->tags as $tagItem) {
                    //Insert to tags
                    $tagInstance = $this->tag->firstOrCreate(['name' => $tagItem]);
                    $tagIds[] = $tagInstance->id;
                }
            }

            $product->tags()->sync($tagIds);
            DB::commit();
            return redirect()->route('product.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . 'Line: ' . $exception->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            $this->product->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . 'Line: ' . $exception->getMessage());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }
}