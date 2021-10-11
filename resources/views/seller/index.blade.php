<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sellers</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Buyers Information</h1>
        <p class='create.seller'><a href='/sellers/create'>create.seller</a></p>
        <div class='sellers'>
            @foreach ($sellers as $seller)
            <div class='seller'>
                <h2 class='id'>{{ $seller->id }}</h2>
                <p class='name'>{{ $seller->seller_name }}</p>
                <h3><a href="/sellers/{{ $seller->id }}">{{ $seller->seller_name }}</a>
            </div>
            @endforeach 
          
        </div>
    </body>
</html>
