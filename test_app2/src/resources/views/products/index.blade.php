<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>mogitate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/products.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        mogitate
      </a>
    </div>
  </header>
    <main class="container">
  <div class="flex">
   <div class="logo">商品一覧</div>
   <a href="{{ route('products.register') }}"class="add-btn">＋商品を追加</a>
</div>
  <div class="content">
    <!-- 左：検索エリア -->
      <div class="form__group-content">
  <form action="{{ route('products.index') }}" method="GET" class="search-box">
    <input class="search-input" type="text" name="keyword" placeholder="商品名で検索" value="{{ request('keyword') }}">
    <button type="submit" class="search-btn">検索</button>
    <p class="price-text">価格順で表示</p>
    <select class="contact-form__select" name="sort">
            <option value="">価格で並べ替え</option>
            <option value="price_desc">高い順</option>
        <option value="price_asc">低い順</option>

          
</select>
</form>
  </div>

      

    <!-- 右：商品一覧 -->
    
    <div class="product-list">
  <div class="flex_card">

    @foreach ($products as $product)
      <a href="{{ route('products.show', $product->id) }}" class="product-card">
        <img src="{{ asset('img/fruits-img/' . $product->image) }}" alt="{{ $product->name }}">
        <div class="product-info">
          <p class="product-name">{{ $product->name }}</p>
          <p class="product-price">¥{{ number_format($product->price) }}</p>
        </div>
      </a>
    @endforeach

  </div>
</div>
</div>


  <!-- ページネーション -->
 <div class="pagination-wrapper">
  {{ $products->links('pagination::bootstrap-4') }}
</div>

  