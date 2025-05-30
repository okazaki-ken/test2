@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('content')

<div class="main_header">
<h2 class="main_header__title">商品一覧</h2>
<form action="/products/register" method="get">
    <button class="main_header__button">+商品追加</button>
</form>
</div>

<div class="content">

<!--検索メニュー側-->
    <div class="contetn_search">
        <aside>
            <form action="/products/search" method="POST">
                @csrf
                <div>
                    <label for="">
                    <!-- labelの使い方を要検索 -->
                        <input type="text" class="content_search__input" placeholder="商品名で検索">
                    </label>
                </div>
                <button type="submit" class="content_search__button" name="keyword">検索</button>
            </form>

            <div class="content_search__price">価格順で表示</div>
            <form action="" class="" method="">
                <!-- 価格順の指定の仕方が未指定 -->
                 <select name="price">
                    <option value="" disabled selected hidden>価格順で並べ替え</option>
                    <option value="high">高い順に表示</option>
                    <option value="low">低い順に表示</option>
                 </select>
            </form>
        </aside>
    </div>

    <!-- 商品表示側 -->
     <div class="content_products">
        @if($products->isEmpty())
            <p>該当する商品はありません。</p>
        @else
            @foreach($products as $product)
            <div class="product">
                <a href="/products/edit?id={{ $product->id }}">
                    <div class="product__img">
                        {{$product->img}}
                    </div>
                    <div class="product__info">
                        <p class="product__info-name">{{$product->name}}</p>
                        <p class="product__info-price">{{$product->price}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        @endif
     </div>

     {{ $products->links() }}

</div>
@endsection