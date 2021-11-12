<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;

use Illuminate\Support\Facades\Storage;

class PageRendererController extends Controller
{
    public function mainPage(Request $req){
        Storage::disk('local')->put('example.txt', 'Contents');
        $goods = Good::all();
        return view('index', ['goods' => $goods]);
    }
    public function cartPage(Request $req){
        return view('cart');
    }
    public function signUpPage(Request $req){
        return view('sign-in');
    }
    public function signInPage(Request $req){
        return view('sign-up');
    }
    public function billingPage(Request $req){
        return view('billing');
    }
    public function contactsPage(Request $req){
        return view('contacts');
    }
    public function goodPage(Request $req){
        return view('good');
    }
}
