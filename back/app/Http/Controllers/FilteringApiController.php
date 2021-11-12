<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;

class FilteringApiController extends Controller
{
    public function filterGoods(Request $request){
        $category_id = $request->input('category_id');
        if ($category_id == 0)
            $filtered_goods = Good::all();
        else
            $filtered_goods = Good::where('category', $category_id)->get();
        return response()->json($filtered_goods, 200);
    }
}
