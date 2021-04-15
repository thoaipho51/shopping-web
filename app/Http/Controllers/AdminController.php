<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Customer;

class AdminController extends Controller
{
    //
    public function index(){

    }

    public static function GetProducts($id= null){
        if(!$id){
            //get al product
            $products = Product::all();
            return $products;
        }
        return null;
    }

    public static function GetUsers($id= null){
        if(!$id){
            //get al product
            $users = User::all();
            return $users;
        }
        return null;
    }
    public static function GetCustomers($id= null){
        if(!$id){
            //get al product
            $customers = Customer::all();
            return $customers;
        }
        return null;
    }
}
