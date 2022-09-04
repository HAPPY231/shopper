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
        $paginate = $request->query('paginate');
        $products = DB::table('products')->select('products.*');


        if(!$paginate){
            $paginate=10;
        }else{
            $paginate = (int)$paginate;
        }
        $products->paginate($paginate);
        if(!is_null($filter)){
            if(array_key_exists('categories',$filter)) {
                $products = $products->whereIn('category_id', $filter['categories']);
                $amount = 0;
                foreach($filter['categories'] as $categirue){
                    $categories_children = Categories::where('parent_id', $categirue[0])->get();
                }

                //function get_childrens($filter, $products){

                $childrens = array();

                    foreach($categories_children as $category_children){

                        array_push($childrens, $category_children->id);
                    }
                    $products = $products->whereIn('category_id',$childrens);

                //}

                //get_childrens($filter, $products);

            }

            if(!is_null($filter['price_min'])) {
                $products = $products->where('price', '>=', $filter['price_min']);
            }
            if(!is_null($filter['price_max'])) {
                $products = $products->where('price', '<=', $filter['price_max']);
            }


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
