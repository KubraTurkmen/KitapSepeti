<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
        public function test($isim){ 

            return "hello " .$isim ;

        }

        public function index(){
            return view('home.index');
        }
     
}
