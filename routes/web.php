<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\AdminController;



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

Route::get('/product/{id}', [ProductController::class,'show']);


Route::get('/admin',function(){
    return view('admin.index');
});

Route::get('/admin/product',function(){
    $products = AdminController::GetProducts();
    return view('admin.product', array(
        'products'=> $products
    ));
});

Route::get('/admin/user',function(){
    $users = AdminController::GetUsers();
    return view('admin.user', array(
        'users'=> $users
    ));
});

Route::get('/admin/customer',function(){
    $customers = AdminController::GetCustomers();
    return view('admin.customer', array(
        'customers'=> $customers
    ));
});

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











