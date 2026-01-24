<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>mogitate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
   <div class="action">+商品を追加</div>
</div>
  <div class="content">
    <!-- 左：検索エリア -->
      <div class="form__group-content">
  <div class="search-box">
    <input type="text" name="name" placeholder="商品名で検索">
    <button type="submit" class="search-btn">検索</button>
    <p class="price-text">価格順で表示</p>
    <select class="contact-form__select" name="category_id" id="">
            <option disabled="" selected="">価格で並べ替え</option>
                        <option value="1">高い順に表示</option>
                        <option value="2">低い順に表示</option>
                      </select>
  </div>
</div>
      

    <!-- 右：商品一覧 -->
    <section class="product-list">
    <div class="flex_card">
  <div class="product-card">
    <img src="{{ asset('img/fruits-img/banana.png') }}">
    <p class="product-name">バナナ</p>
    <p class="product-price">¥600</p>
  </div>
  <div class="product-card">
    <img src="{{ asset('img/fruits-img/grapes.png') }}">
    <p class="product-name">ブドウ</p>
    <p class="product-price">￥1100</p>
  </div>
  <div class="product-card">
    <img src="{{ asset('img/fruits-img/kiwi.png') }}">
    <p class="product-name">キウイ</p>
    <p class="product-price">￥800</p>
  </div>
  <div class="product-card">
    <img src="{{ asset('img/fruits-img/melon.png') }}">
    <p class="product-name">メロン</p>
    <p class="product-price">￥900</p>
  </div>
</section>


  <!-- ページネーション -->
  

  