<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buyers</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Buyers Information</h1>
        <p class='buyer.create'><a href='/buyers/create'>createbuyer</a></p>
        <div class='buyers'>
            @foreach ($buyers as $buyer)
            <div class='buyer'>
                <h2 class='id'>{{ $buyer->id }}</h2>
                <p class='name'>{{ $buyer->name }}</p>
                <h3><a href="/buyers/{{ $buyer->id }}">{{ $buyer->name }}</a>
            </div>
            @endforeach 
          
        </div>
    </body>
</html>
