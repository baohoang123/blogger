<?php

namespace App\Http\Controllers\BackEnd;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;


class AuthController extends Controller
{
    //

    use DispatchesJobs, ValidatesRequests;
 
 
    private $guard;
 
    const BASE_URL = '/';
 
    public function __construct(){
 
        $this->guard = Auth::guard('admin');

    }
 
 
    public function getLogin(Request $request){
 
        return view('Backend.login');
    }

}
