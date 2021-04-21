<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
   public function index(){

    $products = Product::get();
    return view('search');

   }

   public function search(Request $request){
    dd($request);
        if ($request->ajax()){

            $output = "";
            $products = Product::where('product_name','LIKE','%'.$request->search.'%')->get();
            dd($products);

            if($products){
                
                foreach ($products as $key => $product) {

                     $output.='<tr>'.
                    '<td>'.$product->id.'</td>'.
                    '<td>'.$product->product_name.'</td>'.
                    '<td>'.$product->description.'</td>'.
                    '<td>'.$product->Quantity.'</td>'.
                    '<td>'.$product->price.'</td>'.
                    '</tr>';
                }
        
                return Response($output);
            }

        }
    }
}
