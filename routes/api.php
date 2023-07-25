<?php

use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\v1\PostController as PostV1;
use App\Http\Controllers\API\v2\PostController as PostV2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('v1/posts', PostV1::class) 
    ->only(['index', 'show', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('v2/posts', PostV2::class)
    ->only(['index', 'show'])
    ->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login']);