<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buyers</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>
    <h1 class="title">アカウント編集</h1>
    <div class="information">
        
                <h2>アカウントID</h2>
                <h2 class='id'>{{ $buyer->id }}</h2>
        <form action="/buyers/{{ $buyer->id }}" method="POST">
          　@csrf
            @method('PUT')
            <div class='buyers_id'>
        　
            </div>
            <div class='buyers_name'>
                <h2>名前</h2>
                <input type='text' name='buyer[name]' value="{{ $buyer->name }}"/>
                <h3>住所</h3>
                <input type='text' name='buyer[adress]' value="{{ $buyer->adress}}"/>
                <h4>メールアドレス</h4>
                <input type='text' name='buyer[email_adress]' value="{{ $buyer->email_adress}}"/>
                <h5>電話番号</h5>
                <input type='number' name='buyer[phone_number]' value="{{ $buyer->phone_number}}"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </div>
</body>
