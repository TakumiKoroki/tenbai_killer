<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sellers</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Sellers Information</h1>
        <div class='sellers'>
                <h2 class='id'>{{ $seller->id }}</h2>
                <p class='name'>{{ $seller->seller_name }}</p>
                <p class='seller_birth'>{{ $seller->seller_birth}}</p>
                <p class='seller_adress'>{{ $seller->seller_adress }}</p>
                <p class='seller_email_adress'>{{$seller->seller_email_adress }}</p>
                <p class='seller_phone_number'>{{$seller->seller_phone_number}}</p>
                <p class='store_name'>{{$seller->store_name}}</p>
                <p class='store_adress'>{{$seller->store_adress}}</p>
                <p class='store_phone_number'>{{$seller->store_phone_number }}</p>
                <p class="edit">[<a href="/sellers/{{ $seller->id }}/edit">edit</a>]</p>
       </div>
        <div class='back'>[<a href='/sellers'>back</a>]</div>
    </body>
</html>



 