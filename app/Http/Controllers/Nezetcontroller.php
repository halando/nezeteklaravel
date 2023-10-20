<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Nezetcontroller extends Controller
{
   public function getView(){
    $name = "Béla";
    $email = "bela@email.lan";
    return view("tobb",compact("name","email"));
   }
}
