<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student_details;


class UserController extends Controller
{
    function login(Request $req){

        return $req->input();
    }
    
}
