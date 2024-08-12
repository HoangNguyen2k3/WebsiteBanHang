<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index1($slug, $category_id, Request $request)
    {
        Paginator::useBootstrap();
        $user = Auth::user();
        $categorys = Category::where('parent_id', 0)->get();
        $sliders = Slider::latest()->get();

        $query = Product::where('category_id', $category_id);
        if ($request->has('name') && !empty($request->name)) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->has('min_price') && !empty($request->min_price) && $request->has('max_price') && !empty($request->max_price)) {
            $query->where('price', '>=', $request->min_price)
                ->where('price', '<=', $request->max_price);
        } elseif ($request->has('min_price') && !empty($request->min_price)) {
            $query->where('price', '>=', $request->min_price);
        } elseif ($request->has('max_price') && !empty($request->max_price)) {
            $query->where('price', '<=', $request->max_price);
        }
        if ($request->has('manufacturer') && !empty($request->manufacturer)) {
            $query->where('Brand', 'like', '%' . $request->manufacturer . '%');
        }
        if ($request->has('time')) {
            if ($request->time == 'newest') {
                $query->orderBy('created_at', 'desc');
            } elseif ($request->time == 'oldest') {
                $query->orderBy('created_at', 'asc');
            }
        }
        if ($request->has('price_sort')) {
            if ($request->price_sort == 'increase') {
                $query->orderBy('price', 'asc');
            } elseif ($request->price_sort == 'decrease') {
                $query->orderBy('price', 'desc');
            }
        }

        $products = $query->paginate(12);
        $queries = DB::getQueryLog();

        $currentCategory = Category::find($category_id);

        return view('product.category.list', compact('categorys', 'products', 'sliders', 'user', 'currentCategory'));
    }
}
