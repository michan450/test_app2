<?php
// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->all());

        $query = Product::query();

        if ($request->filled('keyword')) {
            $query->where('name', 'like', "%{$request->keyword}%");
        }
           if ($request->filled('sort')) {
        if ($request->sort === 'price_asc') {
            $query->orderBy('price', 'asc');
        } elseif ($request->sort === 'price_desc') {
            $query->orderBy('price', 'desc');
        }
    }

        
        $products = $query->paginate(6);

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
{
    return view('products.detail', compact('product'));
}
public function edit(Product $product)
{
    return view('products.edit', compact('product'));
}
public function update(ProductUpdateRequest $request, Product $product)
{
    $data = $request->validated();

    // 画像更新があれば保存
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('fruits-img', 'public');
    } else {
        // 画像が選択されていない場合は更新しない
        unset($data['image']);
    }

    $product->update($data);

    // 更新成功時だけメッセージを出してリダイレクト
    return redirect()->route('products.index')->with('success', '更新しました');
}

public function destroy(Product $product)
{
    $product->delete();
    return redirect()->route('products.index');
}
public function create()
{
    return view('products.register');
}

public function store(ProductStoreRequest $request)
{
    // バリデーション済みデータを取得
    $data = $request->validated();

    // 画像アップロード処理
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('fruits-img', 'public');
    }

    Product::create($data);

    return redirect()->route('products.index')->with('success', '商品を登録しました');
}


}