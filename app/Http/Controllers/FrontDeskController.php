<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontDeskController extends Controller
{
    //
    public function adminLogin(){
        if(Auth::check()){
            return redirect()->route('admin.dashboard');
        }else{
            return view('cms.auth.login');
        }

    }

    public function dashboard(){
        return view('cms.pages.dashboard.index');
    }
}
