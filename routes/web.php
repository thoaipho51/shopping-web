<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



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

Route::get('/', [ProductController::class,'index']);
Route::get('/product/type/{id}', [ProductController::class,'showProductByType']);


Route:: get('/404',[Mycontroller::class, 'err']);

Route:: get('/about',[Mycontroller::class, 'about']);

Route::get('/checkout',[Mycontroller::class ,'checkout']);

Route::get('/contacts',[Mycontroller::class ,'contacts']);

Route::get('/pricing',[Mycontroller::class ,'pricing']);

Route::get('/products',[Mycontroller::class ,'products']);

Route::get('/product_type',[Mycontroller::class ,'product_type']);

Route:: get('/shoppingcart',[Mycontroller::class, 'shoppingcart']);

Route::get('/signin',[Mycontroller::class ,'signin']);

Route:: get('/signup',[Mycontroller::class, 'signup']);











