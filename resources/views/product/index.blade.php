<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Products information</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Products information</h1>
        <p class='create'><a href='/products/create'>create.products</a></p>
        <div class='products'>
            @foreach ($products as $product)
            <div class='products'>
                <h2 class='id'>{{ $product->id }}</h2>
                <p class='product_name'>{{ $product->name }}</p>
                <h3><a href="/products/{{ $product->id }}">{{ $product->product_name }}</a>
            </div>
            @endforeach 
        </div>
    </body>
</html>
