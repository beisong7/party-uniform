<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signin(Request $request){
//        return $request->all();
        $access = trim($request->input('access'));
        $password = trim($request->input('password'));

        if(filter_var($access, FILTER_VALIDATE_EMAIL)){
//            return ' we are here';
            if (Auth::attempt(['email' => $access, 'password' => $password])) {
                return redirect(route('admin.dashboard'));
            }
            else {
                return back()->withInput($request->input())->withErrors(array('access' => 'Invalid credentials given'));
            }
        }else{
//            return 'we no de';
            if (Auth::attempt(['username' => $access, 'password' => $password])) {
                return redirect(route('admin.dashboard'));
            }
            else {
                return back()->withInput($request->input())->withErrors(array('access' => 'Invalid credentials given'));
            }
        }

    }

    public function signout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
