<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Products</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Products Information</h1>
        <div class='product'>
                <h2 class='id'>{{ $product->id }}</h2>
                <p class='product_name'>{{ $product->product_name }}</p>
                <p class='JAN_code'>{{ $product->JAN_code}}</p>
                <p class='suggested_retail_price'>{{ $product->suggested_retail_price}}</p>
                <p class='released_date'>{{ $product->released_date}}</p>
                <p class='manufacturer'>{{ $product->manufacturer}}</p>
                <p class="edit">[<a href="/products/{{ $product->id }}/edit">edit</a>]</p>
        </div>
        <div class='back'>[<a href='/products'>back</a>]</div>
    </body>
</html>