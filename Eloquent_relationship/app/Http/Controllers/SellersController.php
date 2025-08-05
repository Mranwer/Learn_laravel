<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellersController extends Controller
{
    function oneToOne(){
        return Seller::find(1)->productInfo;    
    }

     function oneToMany(){
        return Seller::find(1)->productManyInfo;    
    }

    function manyToOne(){
        // return Product::all();
        $data = Product::with('seller')->get();
        return $data;

    }

}
