<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\category;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{

    function index(){

        return view('category');
    }
    
    function savecategory(Request $req){
        
        $req->validate([

    		'category' => 'required',
    		'category_description' => 'required',
    	]);
        if (!empty($req->input('sub_category')) && $req->input('category') == ""){
            
            $req->validate([
                'category'=>'required',
            ]);
            return redirect('all_category');

        }elseif(!empty($req->input('sub_of_subcategory')) && $req->input('sub_category') == "" ){
           
            $req->validate([
               'sub_category'=>'required',
            ]);
            
            return redirect('all_category');
        }
    	
    	$data = array(

    		'category_name' => $req->input('category'),
    		'sub_category_name' => $req->input('sub_category'),
    		'sub_category_of' => $req->input('category'),
    		'sub_sub_category_name' => $req->input('sub_of_subcategory'),
    		'sub_sub_category_of' => $req->input('sub_category'),
    		'category_description' => $req->input('category_description'),
    	);

    	DB::table('categories')->insert($data);
    	$req->session()->flash('msg','Category has been added Successfully');
    	return redirect('/all_category');

    }
    
    function all_category(){
        
        $category = DB::table('categories')->get();

        return view('all_category',['categories'=> $category]);
    }
    function search_category(){
        
        
        //$category = DB::table('categories')->get();

        $category = DB::select('select * from categories');
        // echo"<pre>";
        // print_r($category);
        // die();
        return view('search_category',['categories'=> $category]);
    }

}

