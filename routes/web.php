<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

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


//---------------- Category ----------------------------
Route::get('dashboard/category', 'CategoryController@Dashboard');
Route::resource('category', 'CategoryController');


//---------------- Product ----------------------------
Route::get('dashboard/product', 'ProductController@IndexDashboard');
Route::get('GetProducts/{id}', 'ProductController@GetProducts');
Route::get('productDetails/{id}', 'ProductController@ProductDetails');
Route::resource('product', 'ProductController');


//---------------- Authentication ----------------------------
Route::view('/register', 'Authentication.register');
Route::post('/register', 'AuthController@Register');
Route::view('/login', 'Authentication.login');
Route::post('/login', 'AuthController@Login');
Route::get('/logout', 'AuthController@Logout');



//---------------- Cart ----------------------------
Route::get('/cart', 'OrderController@Index')->middleware('checkUserLogin');
Route::get('/addCart/{id}', 'OrderController@Create');


//---------------- Order ----------------------------
Route::post('/update/{id}', 'OrderController@Update');
Route::post('/delete/{id}', 'OrderController@Delete');
