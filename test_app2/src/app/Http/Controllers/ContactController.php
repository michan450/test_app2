<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ContactController extends Controller
{
    //public function index(Request $request)
    //{
        // 1. クエリビルダーを作成
       // $query = Product::query();

        // 2. 商品名検索（部分一致）
        ////if ($request->filled('keyword')) {
            //$query->where('name', 'like', "%{$request->keyword}%");
       // }

        // 3. 並び替え
        //if ($request->filled('sort')) {
            //switch ($request->sort) {
                //case 'price_asc':
                    //$query->orderBy('price', 'asc');
                    ////break;
               // case 'price_desc':
                    //$query->orderBy('price', 'desc');
                    //break;
            //}
        //}

        // 4. 結果取得（ページネーション）
       // $products = $query->paginate(6);

        //return view('index', compact('products'));
   // }
}
