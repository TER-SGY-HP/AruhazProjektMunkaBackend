<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        $record = new Product();
        $record->fill($request->all());
        $record->save();
    }
    public function destroy(string $id)
    {
        Product::find($id)->delete();
    }
}
