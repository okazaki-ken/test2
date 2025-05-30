@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="content__link">
        <a href="/products">商品一覧</a>><span class="content__link--item">{{$form->name}}</span>
    </div>

    <form action="" method="post">
    <div class="main">
        <div class="main__imege">
            <input type="file" name="image" value="{{$form->image}}">
        </div>

        <div class="main__name">
            <p>商品名</p>
            <input type="text" name="name" value="{{$form->name}}">
        </div>

        <div class="main__price">
            <p>値段</p>
            <input type="text" name="price" value="{{$form->price}}">
        </div>

        <div class="main__season">
            <p>季節</p>
            <input type="checkbox" name="season" value="">春
            <input type="checkbox" name="season" value="">夏
            <input type="checkbox" name="season" value="">秋
            <input type="checkbox" name="season" value="">冬
            <!--初期値未設定-->
        </div>
    </div>

    <div class="explanation">
        <p>商品説明</p>
        <div>
            <textarea name="description" cols="30" rows="5" value="{{$form->description"></textarea>
        </div>
    </div>

    <div class="edit__button">
        <a href="/products" class="edit__button--back">戻る</a>
        <button type="submit" class="edit__button--register">変更を保存</button>
    </div>
    </form>

</div>