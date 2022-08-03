<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        if ($request->id) {
            $products = Product::where(['menu_id' => $request->id, 'status' => 1])->get();
        } else {
            $products = Product::get();
        }

        return response()->json($products);
    }

    public function getDetailsByProducId(Request $request)
    {
        $productDetails = Product::findOrFail($request->id);

        return response()->json($productDetails);
    }
}