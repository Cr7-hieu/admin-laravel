<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(){
        return view('user.login');
    }
    function setLogin(Request $request){
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember = $request->input('remember') ?? false;
        if (Login::attempt($login,$remember)) {
            return redirect()->intended('layout');
        }
        if (! filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
            return back()->withErrors([
                'email' => 'The email is not valid.',
            ]);
        }
        if (strlen($request->input('password')) < 8) {
            return back()->withErrors([
                'password' => 'The password is too short.',
            ]);
        }
        if (! $request->input('remember')) {
            return back()->withErrors([
                'remember' => 'Please select checkbox to remember me.',
            ]);
        }
        return back()->withErrors([
            'email' => 'The email or password is incorrect.',
        ]);
    }
    function register(){
        return view('user.register');
    }
    function setRegister(){
        $register->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:register',
            'password' => 'required|string|min:8|max:100',
            'birthday' => 'required|date',
        ]);
        $register = [
            'name =>$request' -> input('name'),
            'email' => '$request' -> input('email'),
            'password' => '$request' -> input('password'),
            'birthday' => '$request' -> input('birthday'),
        ];
        return redirect()->route('user.lohin');
    }
}
