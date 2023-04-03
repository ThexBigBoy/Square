<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $r){
        $data = user::first();
        
    }
}
