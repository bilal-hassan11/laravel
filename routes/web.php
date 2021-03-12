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
Route::post('insert','StudInsertController@insertform');
Route::get('create','StudInsertController@insert');
Route::get('users',[UserController::class,'index']);

Route::get('/service', function () {
    return view('services');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('service','services');
// Route::get('service', function () {
//     return view('services');
// });
