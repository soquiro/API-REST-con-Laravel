<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//V1
route::apiResource('v1/posts',PostV1::class)
    ->only(['index','show','destroy'])
    ->middleware('auth:sanctum');


//V2
route::apiResource('v2/posts',PostV2::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');


Route::post('login',[
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);
