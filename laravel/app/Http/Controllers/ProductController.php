<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function show(){
    echo "Liste des produits";
  }
  public function product($id){
    echo "Fiche du produit" . " " . $id;
  }
}
