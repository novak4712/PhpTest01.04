<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class MainController extends Controller
{
   public function index(){

        $products = Product::all();

       return (view('index', compact('products')));

   }

    public function show($slug){

        $products = Product::where('slug', '=', $slug)->get();

        return (view('oneItem', compact('products')));

    }
}
