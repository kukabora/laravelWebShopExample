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
        $amount = $request->input("amount");
        $items_data = "";
        for ($i = 0;$i<intval($amount);$i++){
            $items_data = $items_data." ".$request->input("item_id");
        }
        $items_data = str_replace("  ", " ", $items_data);
        if ($cart === null){
            $newCart = Cart::create([
                "owner_id" => $user->id,
                "items" => $items_data
            ]);
            $data = ["status" => "OK", "message"=>"Created your cart and added an item to it!"];
        }
        else{
            $cart->items = str_replace("  ", " ", $cart->items." ".$items_data);
            $cart->save();
            $data = ["status" => "OK", "message"=> "Added to your cart!"];
        }
        return response()->json($data, 200);
    }
}
