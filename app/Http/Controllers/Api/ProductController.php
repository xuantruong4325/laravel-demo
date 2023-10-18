<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //hiển thị tất cả danh sách
    public function index()
    {
       $products = Product::all();
       return response()->json($products);
    }
//thêm 1 danh sách ms

    public function store(Request $request)
    {
    //    $products = Product::create([
    //         'name' => $request->name,
    //         'email' => $request->email
    // ]);
    $products = Product::create([
            'name' => $request->name,
            'email' => $request->email
    ]);
        
       return response()->json($products,201);
    // return response()->json(['name' => 'Abigail', 'state' => 'CA']);
    }
//hiển thị danh sách theo id
    public function show(string $id)
    {
        $products = Product::findOrFail($id);
        return response()->json($products);
    }
//tháy đổi danh sách
    public function update(Request $request, string $id)
    {
        $products = Product::findOrFail($id);
        $products->update($request->all());
        return response()->json($products);
    }
    //xóa 1 danh sách
    public function destroy(string $id)
    {
        // $products = Product::findOrFail($id);
        // $products->delete();
        // return redirect()->json(null,201);
    }
}
