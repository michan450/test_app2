<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>mogitate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
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

<div class="float">
    <div class="title-row">
    <h1 class="float__ttl">{{ $product->name }}</h1>
    <a href="{{ route('products.index') }}"class="back-link">←商品一覧</a>
</div>
<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')

<div class="product-top">

   <div class="float__img">
    <img src="{{ asset('img/fruits-img/' . $product->image) }}" alt="{{ $product->name }}">
    </div>
<div class="product-right">
    <label class="product-right__label">商品名</label>
    <input type="text" id="name"name="name" value="{{ old('name', $product->name) }}" class="product-input">
    @error('name')
        <p class="error">{{ $message }}</p>
      @enderror

    <label class="product-right__label">値段</label>
    <input type="number"id="price"name="price"value="{{ old('price', $product->price) }}"class="product-input">
     @error('price')
        <p class="error">{{ $message }}</p>
      @enderror

    <label class="product-right__label">季節</label>
    <div class="season-list">
    @foreach(['春','夏','秋','冬'] as $season)
    <label class="season-item">
        <input type="checkbox" name="seasons[]" value="{{ $season }}"
        {{ in_array($season, old('seasons', $product->seasons ?? [])) ? 'checked' : '' }}>
        <span class="season-text">{{ $season }}</span>
    </label>
@endforeach
</div>
    @error('seasons')
        <p class="error">{{ $message }}</p>
      @enderror
  </div>

</div>

@error('seasons')
  <p class="error">{{ $message }}</p>
@enderror

<div class="form-group">
<input type="file" name="image">
@error('image')
  <p class="error">{{ $message }}</p>
@enderror
</div>
<div class="form-group">
<label class="product-right__label">商品説明</label>
<textarea
  name="description"
  class="product-textarea"
>{{ old('description', $product->description) }}</textarea>

@error('description')
  <p class="error">{{ $message }}</p>
@enderror
</div>
<div class="action-row">

<div class="action-center">
<a href="{{ route('products.index') }}" class="btn btn-back">戻る</a>
    <button type="submit" class="btn btn-save">変更を保存</button>
    <form action="{{ route('products.destroy', $product) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class=" btn-delete">🗑</button>
    </form>
  </div>
</div>
</form>

  </div>

</div>
@if ($errors->any())
  <div class="error-box">
    <ul>
      @foreach ($errors->all() as $error)
        <li class="error">{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

</form>




</body>
</html>
