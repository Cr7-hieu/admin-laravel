<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
class ProfileController extends Controller
{
    function profile(){
        $thong_tin=Profile ::user();
        return view('user/profile', compact('thong_tin'));
    }
    function capNhat(Request $request){
        return view('user.profile');
    }
    function updateProfile(Request $request){
        $profile = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'phone' => $request->phone,
            'dob' => $request->dob,
        ];
        Profile::update($profile);
        return redirect()->route('user.profile');
    }
}