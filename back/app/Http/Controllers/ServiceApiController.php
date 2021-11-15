<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;
use App\Models\Cart;
use App\Models\BillingInfo;
use Illuminate\Support\Facades\Auth;

class ServiceApiController extends Controller
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

    public function filterGoods(Request $request){
        $category_id = $request->input('category_id');
        if ($category_id == 0)
            $filtered_goods = Good::all();
        else
            $filtered_goods = Good::where('category', $category_id)->get();
        return response()->json($filtered_goods, 200);
    }


    public function addBillingInfo(Request $request){
        $fname = $request->input("fname");
        $lname = $request->input("lname");
        $country = $request->input("country");
        $city = $request->input("city");
        $street = $request->input("street");
        $code = $request->input("code");
        $shippingMethod = $request->input("shippingMethod");
        $shippingComp = $request->input("shippingComp");
        $cc_type = $request->input("cctype");
        $cc_number = $request->input("cc_number");
        $cc_date = $request->input("cc_date");
        $apartment = $request->input("apartment");
        $cc_holder = $request->input("cc_holder");
        $cc_code = $request->input("cc_code");
        $newBilling = BillingInfo::create([
            'owner_id' => Auth::id(),
            'fname' => $fname,
            'lname' => $lname,
            'country' => $country,
            'city' => $city,
            'street' => $street,
            'apartment' => $apartment,
            'delivery_method' => $shippingMethod,
            'delivery_company' => $shippingComp,
            'postal_code' => $code,
            'cc_type' => $cc_type,
            'cc_code' => $cc_code,
            'cc_number' => $cc_number,
            'cc_holder' => $cc_holder
        ]);
        return response()->json(["msg" => 'OK'], 200);
    }
}
