<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageRendererController;
use App\Http\Controllers\AuthenticationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('auth')->group(function () {
    Route::get('/register', [PageRendererController::class, 'signUpPage']);
    Route::get('/login', [PageRendererController::class, 'signInPage']);

});

Route::get('/', [PageRendererController::class, 'mainPage']);
Route::get('/cart', [PageRendererController::class, 'cartPage']);
Route::get('/good', [PageRendererController::class, 'goodPage']);
Route::get('/billing', [PageRendererController::class, 'billingPage']);

Route::get('/contacts', [PageRendererController::class, 'contactsPage']);



