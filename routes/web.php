<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', function () {
    return view('login');
});
Route::view('login',[UserController::class,'login']);
Route::get('/service', function () {
    return view('services');
});


// Route::view('service','services');
// Route::get('service', function () {
//     return view('services');
// });
// Route::post('insert','StudInsertController@insertform');
// Route::get('create','StudInsertController@insert');
// Route::get('users',[UserController::class,'index']);
// Route::get('student_details',[UserController::class,'student_details']);
