@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="content">
    <h2>商品登録</h2>
    <form action="/products/register" method="post" enctype="multipart/form-data">
        @csrf
        <div class="content_name">
            商品名
            <span class="content_name__required">必須</span>
        </div>
        <input type="text" name="name" placeholder="商品名を入力">
        <div class="content__error">
            @error('name')
                {{$errors->first('name')}}
            @enderror
        </div>

        <div class="content_name">
            値段
            <span class="content_name__required">必須</span>
        </div>
        <input type="text" name="price" placeholder="値段を入力">
        <div class="content__error">
            @error('price')
                {{$errors->first('price')}}
            @enderror
        </div>

        <div class="content_name">
            商品画像
            <span class="content_name__required">必須</span>
        </div>
        <input type="file" name="image">
        <div class="content__error">
            @error('image')
                {{$errors->first('image')}}
            @enderror
        </div>

        <div class="content_name">
            季節
            <span class="content_name__required">必須</span>
            <span class="content_name__radio">複数選択可</span>
        </div>
        <input type="checkbox" name="season" class="content_name__season" value="春">春
        <input type="checkbox" name="season" class="content_name__season" value="夏">夏
        <input type="checkbox" name="season" class="content_name__season" value="秋">秋
        <input type="checkbox" name="season" class="content_name__season" value="冬">冬
        <div class="content__error">
            @error('season')
                {{$errors->first('season')}}
            @enderror
        </div>

        <div class="content_name">
            商品説明
            <span class="content_name__required">必須</span>
        </div>
        <div>
            <textarea name="description" placeholder="商品の説明を入力" cols="30" rows="5"></textarea>
        </div>
        <div class="content__error">
            @error('description')
                {{$errors->first('description')}}
            @enderror
        </div>

        <div class="content__button">
            <a href="/products" class="content__button--back">戻る</a>
            <button type="submit" class="content__button--register">登録</button>
        </div>

    </form>
</div>
@endsection