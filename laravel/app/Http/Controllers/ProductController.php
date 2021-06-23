<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function show(){
    return view('product-list');
  }
  public function product($id){
    return view('products-details', ['id' => $id]);
  }
}
