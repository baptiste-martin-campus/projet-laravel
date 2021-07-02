<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false; // horodatage

    protected $fillable = ['id', 'name','price','picture','weight','quantity','available','type','category_id']; //Autorise les colonnes à Laravel de remplir la BDD
}
