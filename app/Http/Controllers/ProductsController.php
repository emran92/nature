<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{

    public function home(){
        $categories = Category::all();
        $allProducts = Product::where('status',1)->orderBy('updated_at','DESC')->paginate(9);
        return view('index',compact('allProducts','categories'));
    }

    public function index(){
        return view('admin.Product.add_products');
    }

    public function show($id, Product $product){
        $categories = Category::all();
        return view('products.details',compact('product','categories'));
    }

    public function allFruits(){
        $categories = Category::all();
        $fruits = Product::with('categories')->where('description', 'like', '%fruit%')->paginate(9);
        return view('fruits.list',compact('fruits','categories'));
    }
    public function allVegetables(){
        $categories = Category::all();
        $vegetables = Product::with('categories')->where('description', 'like', '%vege%')->paginate(9);
        return view('vegetables.list',compact('vegetables','categories'));
    }

    public function view(){
        $products = Product::orderBy('updated_at','desc')->paginate(10);
        return view('admin.Product.view',compact('products'));
    }

    public function add(Request $request){

//        $data = $request->all();
//        echo "<pre>"; print_r($data); die;

        $product = new Product();

        $product -> name = $request->name;
        $product -> slug = $request->slug;
        $product -> category_id = $request->category;
        $product -> description = $request->description;
        $product -> price = $request->price;
        $product -> amount = $request->amount;
        $product -> country = $request->country;
        $product -> status = $request->status;

        if($request->hasFile('image1')){
            $image1       = $request->file('image1');
            $text    = $image1->getClientOriginalName();
            $filename = time().'.'.$text;
            $image_resize = Image::make($image1->getRealPath());
            $image_resize->resize(640, 426);
            $image_resize->save(public_path('image/image1/' .$filename));

            $product->image1 = $filename;
        }

        if($request->hasFile('image2')){
            $image2       = $request->file('image2');
            $text    = $image2->getClientOriginalName();
            $filename = time().'.'.$text;

            $image_resize = Image::make($image2->getRealPath());
            $image_resize->resize(640, 426);
            $image_resize->save(public_path('image/image2/' .$filename));

            $product->image2 = $filename;
        }

        if($request->hasFile('image3')){
            $image3       = $request->file('image3');
            $text    = $image3->getClientOriginalName();
            $filename = time().'.'.$text;

            $image_resize = Image::make($image3->getRealPath());
            $image_resize->resize(640, 426);
            $image_resize->save(public_path('image/image3/' .$filename));

            $product->image3 = $filename;
        }

        if($request->hasFile('image4')){
            $image4       = $request->file('image4');
            $text    = $image4->getClientOriginalName();
            $filename = time().'.'.$text;

            $image_resize = Image::make($image4->getRealPath());
            $image_resize->resize(640, 426);
            $image_resize->save(public_path('image/image4/' .$filename));

            $product->image4 = $filename;
        }

        $product ->save();

        return redirect('/product_list')->with('message','New Product Added Successfully');
    }

    public function edit(Request $request, $id){

        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $product = Product::find($id);

            $product -> name = $request->name;
            $product -> slug = $request->slug;
            $product -> category_id = $request->category;
            $product -> description = $request->description;
            $product -> price = $request->price;
            $product -> amount = $request->amount;
            $product -> country = $request->country;
            if(empty($request['status'])){
                $product -> status = 0;
            }else{
                $product -> status = 1;
            }

            if($request->hasFile('image1')){
                $image1       = $request->file('image1');
                $text    = $image1->getClientOriginalName();
                $filename = time().'.'.$text;
                $image_resize = Image::make($image1->getRealPath());
                $image_resize->resize(640, 426);
                $image_resize->save(public_path('image/image1/' .$filename));

                $product->image1 = $filename;
            }

            if($request->hasFile('image2')){
                $image2       = $request->file('image2');
                $text    = $image2->getClientOriginalName();
                $filename = time().'.'.$text;

                $image_resize = Image::make($image2->getRealPath());
                $image_resize->resize(640, 426);
                $image_resize->save(public_path('image/image2/' .$filename));

                $product->image2 = $filename;
            }

            if($request->hasFile('image3')){
                $image3       = $request->file('image3');
                $text    = $image3->getClientOriginalName();
                $filename = time().'.'.$text;

                $image_resize = Image::make($image3->getRealPath());
                $image_resize->resize(640, 426);
                $image_resize->save(public_path('image/image3/' .$filename));

                $product->image3 = $filename;
            }

            if($request->hasFile('image4')){
                $image4       = $request->file('image4');
                $text    = $image4->getClientOriginalName();
                $filename = time().'.'.$text;

                $image_resize = Image::make($image4->getRealPath());
                $image_resize->resize(640, 426);
                $image_resize->save(public_path('image/image4/' .$filename));

                $product->image4 = $filename;
            }

            $product ->update();
            return redirect('/product_list')->with('message','Product Edited Successfully');
        }
        $categories = Category::all();
        $products = Product::with('categories')->where(['id'=>$id])->first();
        return view('admin.Product.edit_product')->with(compact('products','categories'));
    }

    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');
    }
}
