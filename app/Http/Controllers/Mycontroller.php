<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //views
    public function index() {
        return view('layout_admin.layout');
    } 

    public function err() {
        return view('404');
    }
    public function about() {
        return view('about');
    }
    public function checkout() {
        return view('checkout');
    }
    
    public function contacts() {
        return view('contacts');
    } 
    
    public function pricing() {
        return view('pricing');
    }
    public function products() {
        return view('product');
    }
    public function product_type() {
        return view('product_type');
    }
    public function shoppingcart() {
        return view('shopping_cart');
    } 
    
    public function signin() {
        return view('signin');
    }
    public function signup() {
        return view('signup');
    }
   
}
