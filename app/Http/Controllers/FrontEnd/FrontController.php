<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    //
     public function index(){
     	return "string";
     }

     public function fronttest()
     {
     	# code...
     	return view('Frontend.test');
     }
}
