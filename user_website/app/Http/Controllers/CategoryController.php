<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Components\Recursive;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\Log;
class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        
        $this->category=$category;
    }
    public function create(){
        $htmlOption=$this->getCategory($parent_id='');
        return view('admin.category.add',compact('htmlOption'));
    }

    public function index(){
        $categories=$this->category->latest()->paginate(5);
        return view('admin.category.index',compact('categories'));
    }
    public function store(Request $request ){
        $this->category->create([
            'name' => $request->name,
            'parent_id'=> $request->parent_id,
            'slug'=> Str::slug($request->name)
        ]);
        return redirect()->route('categories.index');
    }
    public function getCategory($parent_id){
        $data=$this->category->all();
        $recursive=new Recursive($data);
       $htmlOption= $recursive->CategoriesRecursive($parent_id);
       return $htmlOption;
    }
    public function edit($id){
        $category =$this->category->find($id);
        $htmlOption=$this->getCategory($category->parent_id);
        return view('admin.category.edit',compact('category','htmlOption'));
    }
    public function delete($id){
        try {
            $this->category->find($id)->delete();
            return response()->json([
                'code'=>200,
                'message'=>'success'
            ],200);
            return redirect()->route('categories.index');
        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . 'Line: ' . $exception->getMessage());
            return response()->json([
                'code'=>500,
                'message'=>'fail'
            ],500);
        }
        
        
    }
    public function update($id,Request $request){
        $this->category->find($id)->update([
            'name' => $request->name,
            'parent_id'=> $request->parent_id,
            'slug'=> Str::slug($request->name)
        ]);
        return redirect()->route('categories.index');
    }
}
