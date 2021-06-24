<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
      return view('homepage');
    }

    public function showMembres(){
      return view('membres');
    }

    public function showHubert(){
      return view('hubert');
    }

    public function showAurelien(){
      return view('aurelien');
    }

    public function showLucie(){
      return view('lucie');
    }

    public function showHercule(){
      return view('hercule');
    }

    public function showContact(){
      return view('contact');
    }
}
