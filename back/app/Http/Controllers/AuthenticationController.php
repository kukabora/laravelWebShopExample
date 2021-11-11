<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make($password),
            'country' => $country
        ]);
        return redirect('auth/login');
    }

    public function logining(Request $request){
        $login = $request->input("login");
        $password = $request->input("password");
        if (Auth::attempt(['email' => $login, 'password' => $password])) {
            return redirect('');
        }
        else {
            return back()->withInput(["err" => 'invalid login or password']);
        }
    }
}
