<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->id);
        // view the product.blade.php inside store folder from views folder
        $data['product'] = Product::findOrFail($request->id);
        return view('store.product', $data);
    }
}
