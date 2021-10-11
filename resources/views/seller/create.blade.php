<<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>アカウント作成</title>
    </head>
    <body>
        <h1>アカウント作成</h1>
           
         
        <form action="/sellers" method="POST">
            @csrf
            <div class="seller_name">
                <h2>販売店代表者名</h2>
                <input type="text" name="seller[seller_name]" placeholder="氏名"　value="{{ old('sellers.seller_name')}}"/>
            </div>
            <div class="seller_birth">
               <h2>代表者生年月日</h2>
                <input type="number" name="seller[seller_birth]" placeholder="19990909" value="{{ old('sellers.seller_birth')}}"/>
            </div>
            
            <div class="seller_adress">
                <h2>代表者住所</h2>
                 <input type="text" name="seller[seller_adress]" placeholder="住所" value="{{ old('sellers.seller_adress')}}"/>
            </div>
            
            <div class="seller_email_adress">
               <h2>代表者メールアドレス</h2>
                <input type="text" name="seller[seller_email_adress]" placeholder="代表者メールアドレス"  value="{{ old('sellers.seller_email_adress')}}"/>
            </div>
            
            <div class="seller_phone_number">
                <h2>代表者電話番号</h2>
                 <input type="number" name="seller[seller_phone_number]" placeholder="代表者電話番号"  value="{{ old('seller_phone_number')}}"/>
            </div>
            
             <div class="store_name">
                <h2>販売店名</h2>
                 <input type="text" name="seller[store_name]" placeholder="販売店名"  value="{{ old('sellers.store_name')}}"/>
            </div>
            
             <div class="seller_phone_number">
                <h2>販売店住所</h2>
                 <input type="text" name="seller[store_adress]" placeholder="販売店住所"  value="{{ old('sellers.store_adress')}}"/>
            </div>
            
             <div class="seller_phone_number">
                <h2>販売店電話番号</h2>
                 <input type="number" name="seller[store_phone_number]" placeholder="販売店電話番号"  value="{{ old('sellers.store_phone_number')}}"/>
            </div>
          
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>

