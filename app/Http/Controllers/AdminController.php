<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function login(){
        return view('page.login');
    }

    function loginProses(Request $request){
        // dd($request->all());
        $validation = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        if ($validation['email'] == 'Admin@gmail.com'){
            if ($validation['password'] == '12345678'){
                return redirect()->route('dashboard');
            } else {
                return back()->with('Error', 'Akun tidak valid');
            }
        } else {
            return back()->with('Error', 'Akun tidak ditemukan');
        }
    }
}
