<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartApiController extends Controller
{
    public function addToCart(Request $request){
        $user = Auth::user();
        $cart = Cart::where("owner_id", $user->id)->first();
        if ($cart === null){
            $newCart = Cart::create([
                "owner_id" => $user->id,
                "items" => $request->input("item_id")
            ]);
        $data = ["status" => "OK", "msg"=> "Added to your cart!"];
        }
        else{
            $cart->items = $cart->items." ".$request->input("item_id");
            $cart->save();
            $data = ["status" => "Error", "msg"=>"Something gone wrong!"];
        }
        return response()->json($data, 200);
    }
}
