<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\partOneController;
use App\Http\Controllers\partTwoController;

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

Route::get('partOne/countNumbers/{start}/{end}',[partOneController::class,'countNumbers']);
Route::get('partOne/indexOfString/{input_string}',[partOneController::class,'IndexOfString']);


Route::post('user/login',[partTwoController::class,'login']);
Route::get('user/',[partTwoController::class,'index']);
Route::post('user/',[partTwoController::class,'store']);
Route::get('user/{id}',[partTwoController::class,'show']);
Route::put('user/{id}',[partTwoController::class,'update']);
Route::delete('user/{id}',[partTwoController::class,'destroy']);
