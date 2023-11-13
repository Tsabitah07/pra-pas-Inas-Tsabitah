<?php

namespace App\Http\Controllers;
use App\Models\Product;

// use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){
        return view("product.all", [
            "title" => "Product",
            "no" => 1,
            "products" => Product::all()
        ]);
    }

    public function show($product)
    {
        return view('product.detail', [
            'title'=> 'detail-product',
            'product' => Product::find($product)
        ]);
    }
}
