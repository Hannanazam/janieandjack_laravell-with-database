<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductVariation;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('front.products', compact('products'));
    }

    public function detail($id)
    {
        $product = Product::find($id);
        $variations = ProductVariation::where('product_id', $product->id)->get();
        $a = $variations[0];
        //$b =($a->variation);
        // foreach($variations as $items){
            // dd($items->variation);
            // // $a = $items[0];
            // $variExploded = explode("-" , $items->variation);
            // dd($variExploded)
            // $var1 = $variExploded[0];
            // $var2 = $variExploded[1];
        // }

        $product_image = Gallery::where('product_id', $product->id)->get();

        return view('front.productdetail', compact('product', 'variations' , 'product_image'));
    }
}
