<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Product information</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>
    <h1 class="title">商品情報編集</h1>
    <div class="products_information">
        
                <h2>商品ID</h2>
                <h2 class='id'>{{ $product->id }}</h2>
        <form action="/products/{{ $product->id }}" method="POST">
          　@csrf
            @method('PUT')
            <div class='products_id'>
            </div>
            <div class='product_name'>
                <h2>商品名称</h2>
                <input type='text' name='product[product_name]' value="{{ $product->product_name }}"/>
                <h2>JANコード</h2>
                <input type='number' name='product[JAN_code]' value="{{ $product->JAN_code}}"/>
                 <h2>発売日</h2>
                <input type='text' name='product[released_date]' value="{{ $product->released_date}}"/>
                <h2>メーカー</h2>
                <input type='text' name='product[manufacturer]' value="{{ $product->manufacturer}}"/>
                <h2>希望小売価格</h2>
                <input type='text' name='product[suggested_retail_price]' value="{{ $product->suggested_retail_price}}"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </div>
</body>
