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

    public function get_paginate($request){
        $paginate = $request->query('paginate');
        if(!$paginate) return 10;
        if($paginate==1010) return 10;
        if($paginate==1515) return 15;
        if($paginate==2020) return 20;
        if($paginate==100100) return 100;

        return (int)$paginate;
    }

    public function get_childrens($categories_children, $products){

        foreach($categories_children as $category_children){
            $products = $products->orWhere('category_id', $category_children->id);

            $get_all_childrends = Categories::where('parent_id',
                $category_children->id)->get();

            if(count($get_all_childrends)>0){
                $this->get_childrens($get_all_childrends, $products);
            }
        }

    }

    public function order_by($order_by, $products){
        if(!$order_by) $order_by = "price_Descending";

        switch($order_by){
            case "price_Descending":
                $products->orderBy('price','desc');
                break;
            case "price_Ascending":
                $products->orderBy('price','asc');
                break;
            case "best_Selling":
                $products->orderBy('views','desc');
                break;
        }

        return $products;
    }

    public function categories_pages($id): View
    {
        $products = DB::table('products')->select('products.*')->where('category_id',$id);

        $categories_children = Categories::where('parent_id', $id)->get();

        $this->get_childrens($categories_children, $products);

        $categories = Categories::tree();

        return view('home',[
            'products' => $products->get(),
            'categories' => $categories,
        ]);
    }

    public function all_products(Request $request): View|JsonResponse
    {

        $filter = $request->query('filter');
        $products = DB::table('products')->select('products.*');
        $search_by = $request->query('search_by');
        $order_by = $request->query('order_by');
        $this->order_by($order_by, $products);
        $products->paginate($this->get_paginate($request));

        if(!is_null($filter) || strlen($search_by)>0 || !is_null($order_by)){

            if(strlen($search_by)>0){
                $products = $products->where('name', 'LIKE',"%{$search_by}%");
            }
            $this->order_by($order_by, $products);
            if(array_key_exists('categories',$filter)) {
                $products = $products->whereIn('category_id', $filter['categories']);

                foreach($filter['categories'] as $categirue){
                    $categories_children = Categories::orWhere('parent_id', $categirue[0]);
                }
                $categories_children = $categories_children->get();

                $this->get_childrens($categories_children, $products);

            }

            if(!is_null($filter['price_min'])) {
                $products = $products->where('price', '>=', $filter['price_min']);
            }

            if(!is_null($filter['price_max'])) {
                $products = $products->where('price', '<=', $filter['price_max']);
            }

            $products->paginate($this->get_paginate($request));
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
