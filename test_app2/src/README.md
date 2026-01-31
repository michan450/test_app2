# test_app2
# 商品管理アプリ

## 概要
このアプリは、商品一覧の表示、検索、ページネーション、商品登録・編集・削除ができる管理用ウェブアプリです。  
Laravel フレームワークを使用して構築しています。

## 使用技術
- PHP 8.1
- Laravel 10
- MySQL:8.0.26
- nginx:1.21.1
- HTML / CSS / Blade テンプレート

## 機能
- 商品一覧表示（1ページ6件ずつ）
- 商品検索（部分一致対応）
- 商品登録・編集・削除
- ページネーション

## 環境構築手順
●Dockerビルド
1. git clone git@github.com:michan450/test_app2.git
2. docker-compose up-d--build

●laravel環境構築
1. docker-compose exec php bash
2. composer install
3. cp .env.example .env , 環境変数を適宜変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

##　開発環境
●商品一覧　http://localhost/
●商品詳細　http://localhost/products
●商品登録  http://localhost/products/register


## ER図
(public/img/ERD.png)
