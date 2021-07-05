<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
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

  public function showByName(){
      $productsName = Product::all()->sortBy('name');

      return view('tri', ['products' => $productsName]);
  }

  public function showByPrice(){
      $productsPrice = Product::all()->sortBy('price');

      return view('tri', ['products' => $productsPrice]);
  }

  public function categories(){
    return $this->belongsToMany(Categories::class);
  }

  public function orders(){
    return $this->belongsToMany(Orders::class);
  }

}
