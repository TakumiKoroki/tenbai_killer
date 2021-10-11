<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>アカウント作成</title>
    </head>
    <body>
        <h1>アカウント作成</h1>
           
         
        <form action="/buyers" method="POST">
            @csrf
            <div class="name">
                <h2>名前</h2>
                <input type="text" name="buyer[name]" placeholder="名前"　value="{{ old('buyers.name')}}"/>
            </div>
            <div class="birth">
               <h2>生年月日</h2>
                <input type="text" name="buyer[birth]" placeholder="誕生日" value="{{ old('buyers.birth')}}"/>
            </div>
            
            <div class="adress">
                <h2>住所</h2>
                 <input type="text" name="buyer[adress]" placeholder="住所" value="{{ old('buyers.adress')}}"/>
            </div>
            
            <div class="phone_number">
               <h2>電話番号</h2>
                <input type="number" name="buyer[phone_number]" placeholder="電話番号"  value="{{ old('buyers.phone_number')}}"/>
            </div>
            
            <div class="email_adress">
                <h2>メールアドレス</h2>
                 <input type="text" name="buyer[email_adress]" placeholder="メールアドレス"  value="{{ old('buyers.email_adress')}}"/>
            </div>
          
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>

