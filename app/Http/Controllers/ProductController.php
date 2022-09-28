<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Images;
use App\Models\Products;



class ProductController extends Controller
{
    public function index($id)
    {
        $product = Products::find($id);
        $images = $product->images()->orderBy('position', 'asc')->get();
        $category = Categories::find($product->category_id);
        $product->views = $product->views+1;
        $product->save();
        return view('product',[
            'product' => $product,
            'images' => $images,
            'category' => $category,
        ]);
    }
}
