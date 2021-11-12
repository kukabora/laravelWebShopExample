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
        $filtered_goods = Good::select('select * from goods where category = '.$category_id);
        return response()->json(print_r($filtered_goods), 200);
    }
}
