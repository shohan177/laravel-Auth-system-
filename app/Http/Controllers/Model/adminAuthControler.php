<?php

namespace App\Http\Controllers\Model;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class adminAuthControler extends Controller
{
     use AuthenticatesUsers;


    public function logAndReg(){
        return view('admin.login');
    }

    public function reg(Request $request){
    //return $request -> all();

        Admin::create([
            'name' => $request -> name,
            'uname' => $request -> uname,
            'email' => $request -> email,
            'cell' => $request -> cell,
            'password' => Hash::make($request -> pass),

        ]);

        return redirect() -> back();
    }


        protected function guard()
        {
            return Auth::guard('admin');
        }
}
