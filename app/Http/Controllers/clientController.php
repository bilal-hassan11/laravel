<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Http;

class clientController extends Controller
{
    public function getProductbyid($id){

        $response = Http::post('https://jsonplaceholder.typicode.com/posts'.$id);
    
        return $response->json();
    }

    public function getAllProducts(){

        $post = Http::get('https://jsonplaceholder.typicode.com/posts');
    
        return $post->json();
    }
}
