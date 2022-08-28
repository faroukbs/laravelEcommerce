<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //adding a new product
    public function AddProduct( Request $request ){
        $request->validate([
            'name'=>'required|max:255',
            'description'=>'required',
            'price'=>'required',
            'category_id'=>'required',
        ]);
        $p=new Product();
        $p->name= request('name');
        $p->description=request('description');
        $p->price=request('price');
        $p->quantity=request('quantity');
       // $p->category_id=request('category_id');
        if($p->save())
            return  redirect('product/list');
        else
            return redirect('/product/form')->with('error','Product Not Added');
    }
    //product form
    public function showproduct (){
        $products=Product::all();
        return view('Products.ProductForm')->with('products',$products);
    }

    //listing all products
    public function listProduct(){
        //getting all products from the database
        $products=Product::all();
        //returning the view with the products
        return view('Products.listProduct')->with('products',$products);
    }
}
