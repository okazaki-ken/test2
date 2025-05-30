<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $isEmpty = $products->isEmpty();
        $products = Product::simplePaginate(6);
        return view('products',compact('products', 'isEmpty'));
    }

    //検索機能
    public function search(Request $request){
        $keyword = $request->input('keyword');
        $product =Product::where('name',$request->input)->first();
        $param = [
            'input' => $request->input,
            'products' => $products
        ];
        return view('products',$param);
    }
}
