<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::get();
        
        return response()->json($menu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menuById(Request $request)
    {
        $menu = Menu::find($request->id);
    
        return response()->json($menu);
    }

    public function searchByName(Request $request)
    {
        $menu = Menu::where('name', 'LIKE', '%'.$request->name.'%')->get();
        $products = Product::where('name', 'LIKE', '%'.$request->name.'%')->get();

        return response()->json([
            'menu' => $menu,
            'products' => $products,
        ]);
    }
}
