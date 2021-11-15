<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FilteringApiController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CartApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function () {
    Route::post('newUserRegister', [AuthenticationController::class, 'newUserRegister']);
    Route::post('logining', [AuthenticationController::class, 'logining']);
    Route::get('logout', [AuthenticationController::class, 'loggingOut']);
});

Route::post('/goodsFilter', [FilteringApiController::class, 'filterGoods']);

Route::post('/addToCart', [CartApiController::class, 'addToCart']);

