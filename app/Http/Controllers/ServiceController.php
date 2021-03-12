<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = \App\Services::all();

        return view('services', compact('services'));
    }
    
    public function service(){
        
        $req->validate([
            'Name'=>"required",
            'Password'=>"required",
        ]);
          
        return $req->input();
    }

}
