<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;
use App\Models\BillingInfo;


use Illuminate\Support\Facades\Storage;

class PageRendererController extends Controller
{
    public function mainPage(Request $request){
        $goods = Good::all();
        return view('index', ['goods' => $goods]);
    }
    public function finishedOrder(Request $request){
        $cart = Cart::where('owner_id', Auth::id())->first();
        if ($cart === null || $cart->items == "" || $cart->items == " "){
            $items = [];
            $itemIds = explode(" ", $cart->items);
            for ($i=0;$i<count($itemIds);$i++){
                $items[$i] = Good::where("id", $itemIds[$i])->first();
            }

        }
        else {

        }
        return view('finishedOrder');
    }
    public function cartPage(Request $request){
        $user = Auth::user();
        $context = ["billingInfo" => BillingInfo::where("owner_id", Auth::id())->first()];
        $cart = Cart::where('owner_id', Auth::id())->first();
        if ($cart === null || $cart->items == "" || $cart->items == " ")
            return view('cart', ["msg" => "First thing first, you need to add something to your cart!", "items" => []]);
        else{
            $items = [];
            $itemIds = explode(" ", $cart->items);
            for ($i=0;$i<count($itemIds);$i++){
                $items[$i] = Good::where("id", $itemIds[$i])->first();
            }
            $context['items'] = array_slice($items, 1);
            $context['msg'] = "";
            return view('cart', $context);
        }
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
