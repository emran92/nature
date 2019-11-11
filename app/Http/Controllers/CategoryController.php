<?php

namespace App\Http\Controllers;

use App\Category;
use DemeterChain\C;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        return view('admin.Category.add_category');
    }

    public function category(Category $category){
        $categories = Category::all();
        $allProducts = $category->products()->paginate(10);
        return view('index',compact('categories','allProducts'));
    }

    public function view(){
        $categories = Category::orderBy('updated_at','desc')->paginate(5);
        return view('admin.Category.view',compact('categories'));
    }


    public function add(Request $request){

        $category = new Category();

        $category -> name = $request->name;
        $category -> slug = $request->slug;
        $category -> status = $request->status;

        $category ->save();

        return redirect('/category_list')->with('message','New Category Added Successfully');
    }

    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }
}
