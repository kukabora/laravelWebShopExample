<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartApiController extends Controller
{
    public function addToCart(Request $request){
        $data = "hello world";
        return response()->json($data, 200, $headers);
    }
}
