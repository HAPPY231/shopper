<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return View|JsonResponse
     */
    public function all_products(Request $request): View|JsonResponse
    {
        $filter = $request->query('filter');
        $products = DB::table('products')->select('products.*');

        function get_paginate($request){
            $paginate = $request->query('paginate');
            if(!$paginate) return 10;
            if($paginate==1010) return 10;
            if($paginate==1515) return 15;
            if($paginate==2020) return 20;
            if($paginate==100100) return 100;

            return (int)$paginate;
        }
        $products->paginate(get_paginate($request));
        if(!is_null($filter)){
            if(array_key_exists('categories',$filter)) {
                $products = $products->whereIn('category_id', $filter['categories']);

                foreach($filter['categories'] as $categirue){
                    $categories_children = Categories::orWhere('parent_id', $categirue[0]);
                }
                $categories_children = $categories_children->get();
                //function get_childrens($filter, $products){

                    foreach($categories_children as $category_children){
                        $products = $products->orWhere('category_id', $category_children->id);


                    }

                //}

                //get_childrens($filter, $products);

            }

            if(!is_null($filter['price_min'])) {
                $products = $products->where('price', '>=', $filter['price_min']);
            }
            if(!is_null($filter['price_max'])) {
                $products = $products->where('price', '<=', $filter['price_max']);
            }

            $products->paginate(get_paginate($request));
            return response()->json([
                'data'=>$products->get(),
                ]);
        }

        $categories = Categories::tree();

        return view('home',[
            'products' => $products->get(),
            'categories' => $categories,
        ]);
    }

}
