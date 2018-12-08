<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackController extends Controller
{
    //
     public function index(){
     	return "string";;
     }

     public function backtest()
     {
     	# code...
     	return view('Backend.test');
     }
}
