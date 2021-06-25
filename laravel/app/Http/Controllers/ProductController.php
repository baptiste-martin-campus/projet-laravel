<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  public function show(){
    $products = DB::select('select * from products');
    return view('product-list', ['products' => $products]);
  }

  public function product($id){
    $product = DB::select('select * from products where id = :id', ['id' => $id]);
    return view('products-details', ['product' => $product[0]]);
  }
}
