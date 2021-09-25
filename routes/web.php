<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Product;

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

Route::get('/', function () {
    $productData = Product::where('cat_id', 2)->paginate(8);
    return view('welcome', ['data' => $productData]);
});
// Route::get('/productDetails', function () {

//     return view('profile.product.product-details');
// });



//---------------- Category Controller ----------------------------
Route::get('dashboard/category', 'CategoryController@Dashboard');
Route::resource('category', 'CategoryController');


//---------------- Product Controller ----------------------------
Route::get('dashboard/product', 'ProductController@IndexDashboard');
Route::get('GetProducts/{id}', 'ProductController@GetProducts');
Route::get('productDetails/{id}', 'ProductController@ProductDetails');
Route::resource('product', 'ProductController');
