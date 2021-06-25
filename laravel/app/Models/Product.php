<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function triNom(){
      $products = DB::select('select * from products order by name');
      return view('product-list', ['products' => $products]);
    }

    public function triPrix(){
      $products = DB::select('select * from products order by price');
      return view('product-list', ['products' => $products]);
    }
}
