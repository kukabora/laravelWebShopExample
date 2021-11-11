<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function newUserRegister(Request $request){
        $fname = $request->input("fname");
        $lname = $request->input("lname");
        $email = $request->input("email");
        $password = $request->input("pass");
        $login = $request->input("login");
        $bday = $request->input("bday");
        $country = $request->input("country");
        $user = User::create([
            'fname' => $fname,
            'bday' => $bday,
            'lname' => $lname,
            'email' => $email,
            'login' => $login,
            'password' => $password,
            'country' => $country
        ]);
        return redirect('auth/login');
    }

    public function logining(Request $request){
        $login = $request->input("login");
        $password = $request->input("password");
        return redirect('');
    }
}
