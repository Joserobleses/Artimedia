<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class ProductController extends Controller
{
    public function index(Request $request)
    {
    $name = $request->get('name');
    $brand = $request->get('brand_id');
    
    $brands = Brand::All()->pluck('name');
    
    $products = Product::orderBy('id','DESC')
        ->name($name)
        ->brand($brand)
        ->paginate(5);
    return view('welcome',compact('products', 'brands'));

    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('show', compact('product'));
    }
}
