<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>アカウント作成</title>
    </head>
    <body>
        <h1>アカウント作成</h1>
        <form action="/products" method="POST">
            @csrf
            <div class="product_name">
                <h2>商品名称</h2>
                <input type="text" name="products[product_name]" placeholder="商品名称"　value="{{ old('products.product_name')}}"/>
            </div>
            
            <div class="JAN_code">
                <h2>JANコード</h2>
                 <input type="number" name="products[JAN_code]" placeholder="JANコード" value="{{ old('products.JAN_code')}}"/>
            </div>
            
            <div class="suggested_retail_price">
               <h2>希望小売価格</h2>
                <input type="number" name="products[suggested_retail_price]" placeholder="希望小売価格"  value="{{ old('products.suggested_retail_price')}}"/>
            </div>
            
            <div class="released_date">
               <h2>発売日</h2>
                <input type="text" name="products[released_date]" placeholder="発売日" value="{{ old('products.released_date')}}"/>
            </div>
            
            <div class="email_adress">
                <h2>メーカー</h2>
                 <input type="text" name="products[manufacturer]" placeholder="メーカー"  value="{{ old('products.manufacturer')}}"/>
            </div>
          
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/products">back</a>]</div>
    </body>
</html>

