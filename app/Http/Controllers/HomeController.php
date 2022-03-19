<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function palindrome(){
    $Palindorme_chrecter ='MYM';
    $reverse = strrev($Palindorme_chrecter);
    if($Palindorme_chrecter==$reverse){
        echo $Palindorme_chrecter." "."is a Palindrome";
    }
    else {
        echo $Palindorme_chrecter." "."is not a Palindorm";
    }
  }

  public function age(){
      $age = 20 ;
      if($age>18){
          echo "Your are adult";
      }
      else {
          echo "not adult";
      }
  }
}
