<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;

use Illuminate\Support\Facades\Storage;

class PageRendererController extends Controller
{
    public function mainPage(Request $request){
        $goods = Good::all();
        return view('index', ['goods' => $goods]);
    }
    public function cartPage(Request $request){
        return view('cart');
    }
    public function signUpPage(Request $request){
        return view('sign-in');
    }
    public function signInPage(Request $request){
        return view('sign-up');
    }
    public function billingPage(Request $request){
        return view('billing');
    }
    public function contactsPage(Request $request){
        return view('contacts');
    }
    public function goodPage(Request $request){
        $good_id = $request->good_id;
        $good = Good::where('id', $good_id)->first();
        return view('good', ['good' => $good]);
    }
}
