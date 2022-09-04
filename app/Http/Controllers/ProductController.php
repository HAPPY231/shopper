<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Images;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id){
        $product = Products::find($id);
        $images = $product->images()->get();
        $category = Categories::find($product->category_id);
        return view('product',[
            'product' => $product,
            'images' => $images,
            'category' => $category,
        ]);
    }
}
