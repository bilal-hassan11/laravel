<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;


class UserController extends Controller
{
    function index(){

       return DB::select('select * from student_details');
    }

    function list(){
        
        $data= Member::all();
        return $data;  
    } 
}
