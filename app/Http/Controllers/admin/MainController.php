<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function dashboard(){
        return view('admin.dashboard');
    }
    function admin_login(){
        return view('admin.login');
    }
    function admin_login_check(Request $request){
        $request->validate([
            'email'=>'email|required',
            'password'=>'required',
            'mobile'=> 'required|max:11|numeric'
        ]);
    }
    
}
