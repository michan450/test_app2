<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>mogitate</title>
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
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
  <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
@csrf
</form>

    <form class="contact-form">
<h1 class="contact-form__heading">商品登録</h1>
<div class="contact-form__inner">

<div class="contact-form__group">
<label class="contact-form__label" for="name">商品名</label>
<span class="contact-form__required">必須</span>
<input class="contact-form__item__input" type="text" name="content" value="{{ old('name') }}">
@error('name') <p>{{ $message }}</p> @enderror
</div>
<div class="contact-form__group">
<label class="contact-form__label" for="name">値段</label>
<input class="contact-form__item__input" type="number" name="price" value="{{ old('price') }}">
@error('price') <p>{{ $message }}</p> @enderror
</div>
<div class="contact-form__group">
<label class="contact-form__label" for="name">商品画像</label>
<input class="contact-file__input" type="file" name="image">
@error('image') <p>{{ $message }}</p> @enderror
</div>
<div class="contact-form__group">
  <label class="contact-form__label">季節</label>

  <div class="contact-form__seasons">
    @foreach (['春','夏','秋','冬'] as $season)
      <label class="contact-form__season-item">
        <input
          class="contact-form__input"
          type="checkbox"
          name="seasons[]"
          value="{{ $season }}"
          {{ in_array($season, old('seasons', [])) ? 'checked' : '' }}
        >
        <span>{{ $season }}</span>
      </label>
    @endforeach
  </div>
</div>
  @error('seasons')
    <p class="error">{{ $message }}</p>
  @enderror
</div>

<div class="contact-form__group">
<label class="contact-form__label" for="name">商品説明</label>
<textarea
          name="description"
          class="contact-form__item__input"
          rows="4"
      >{{ old('description') }}</textarea>
      @error('description') <p style="color:red">{{ $message }}</p> @enderror
  </div>
  

<div class="update-form">
  <div class="form-button">
    <button class="form-button-submit register" type="submit">登録</button>
  </div>
  <div class="form-button">
    <a href="{{ route('products.index') }}" class="form-button-submit back">戻る</a>
  </div>
</div>

</form>

