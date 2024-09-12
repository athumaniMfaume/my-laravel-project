<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;


class ProductController extends Controller
{
    public function index(){

        $products = Product::paginate(5);

        return view('products.index', compact('products'));

    }

    public function create(){

        return view('products.create');

    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'description' => 'required',
        ]);
        // upload image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return back()->withSuccess('Product created!!!');
        // dd($request->all());

    }

    public function edit($id){

        $product = Product::where('id',$id)->first();

        return view('products.edit', compact('product'));

    }

    public function update(Request $request, $id){



        $request->validate([
            'name' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
            'description' => 'required',
        ]);

        $product = Product::where('id',$id)->first();

        if (isset($request->image)) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }
        // upload image


        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return back()->withSuccess('Product updated!!!');
        // dd($request->all());

        return view('products.edit', compact('product'));

    }

    public function destroy($id){

        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product deleted!!!');


    }

    public function show($id){

        $product = Product::where('id',$id)->first();

        return view('products.show', compact('product'));


    }
}
