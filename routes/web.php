<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Http;
use App\Http\Controllers\clientController;
use App\Providers\App\Http\Controllers;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CsvController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\SearchController;
use App\Exports\BulkExport;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\ArticleController;


// Route::get('/product',[clientController::class,'getAllProducts'])->name('products.getallproducts');
// Route::get('/product/{id}',[clientController::class,'getProductbyid'])->name('products.getproductsbyid');
// Route::get('/',[NotificationController::class,'index']);
// Route::get('/sendSms',[NotificationController::class,'sendSmsNotification'])->name('send');
// Route::get('/search_category',[CategoryController::class,'search_category']);
// Route::get('/category',[CategoryController::class,'index']);
// Route::post('/savecategory',[CategoryController::class,'savecategory']);
// Route::get('/all_category',[CategoryController::class,'all_category']);

// Route::get('products',[ProductsController::class,'new_product']);
// Route::post('store_products',[ProductsController::class,'store_products'])->name('product.store');
// Route::get('/search',[ProductsController::class,'search']);

// Route::get('/',[CsvController::class,'import']);
// Route::post('/importcsv',[CsvController::class,'importcsv'])->name('import.csv');
// Route::get('/getcsv',[CsvController::class,'csv_data'])->name('all.csv');

// //upload an image
// Route::get('file', [FileController::class, 'create']); 

// Route::post('storefile', [FileController::class, 'store']);

// // //cart
Route::get('/',[ProductsController::class,'index']);
Route::get('cart', [ProductsController::class,'cart']);
Route::get('add-to-cart/{id}', [ProductsController::class,'addToCart']);
Route::patch('update-cart', [ProductsController::class,'update']);
Route::delete('remove-from-cart',[ProductsController::class,'remove']);
Route::post('/rating/{product}', [ProductsController::class,'rating'])->name('rating');
// Route::get('/checkout', [ProductsController::class,'checkout']);

// // //Import & Export
// Route::get('export', [ImportExportController::class,'export'])->name('export');
// Route::get('importExportView', [ImportExportController::class,'importExportView']);
// Route::post('import', [ImportExportController::class,'import'])->name('import');

// // // Route for view/blade file.
// Route::get('importExportView', [ExcelController::class, 'importExportView'])->name('importExportView');
// // Route for export/download tabledata to .csv, .xls or .xlsx
// Route::get('exportExcel/{type}', [ExcelController::class, 'exportExcel'])->name('exportExcel');

// //  Route for import excel data to database.
// Route::post('importExcel', [ExcelController::class, 'importExcel'])->name('importExcel');
// Route::post('/generate_txt',[ProductsController::class,'generatetxt']);

// Route::resource('articles', ArticleController::class);
// Route::get('get-articles', [ArticleController::class, 'getArticles'])->name('get-articles');

// Route::get('paywithrazorpay', [RazorpayController::class, 'payWithRazorpay'])->name('paywithrazorpay');
// // Post Route For Make Payment Request
// Route::get('payment', [RazorpayPaymentController::class,'index']);
// Route::post('payment', [RazorpayPaymentController::class,'store'])->name('razorpay.payment.store');
//Route for searching a data 

//Route::get('/', [SearchController::class,'index']);
// Route::get('/search', [SearchController::class,'search']);

//Route::get('/','SearchController@index');