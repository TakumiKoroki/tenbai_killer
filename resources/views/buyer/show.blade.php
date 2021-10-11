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
        <div class='buyer'>
                <h2 class='id'>{{ $buyer->id }}</h2>
                <p class='name'>{{ $buyer->name }}</p>
                <p class='updated_at'>{{ $buyer->updated_at}}</p>
                <p class='adress'>{{ $buyer->adress }}</p>
                <p class='phone_number'>{{ $buyer->phone_number }}</p>
                <p class='email_adress'>{{ $buyer->email_adress }}</p>
                <p class="edit">[<a href="/buyers/{{ $buyer->id }}/edit">edit</a>]</p>
       </div>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
</html>
