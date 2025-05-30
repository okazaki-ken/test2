<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    //登録画面を呼び出す
    public function index(){
        return view('register');
    }

    //新規商品を登録
    public function create(RegisterRequest $request){
        $form = $request->all();
        Product::create($form);
        return redirect('/products');
    }

    //商品の編集
    public function edit(Request $request){
        $product = Product::find($request->id);
        return view('edit',['form' => $product]);
    }



}
