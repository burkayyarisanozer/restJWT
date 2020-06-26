<?php

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

Route::group([
    'middleware' => ['api'],
], static function ($router) {
    Route::post('login', 'MemberController@login');
    Route::group(['middleware' => 'jwt.verify'], static function( $router){
        Route::post('logout', 'MemberController@logout');
        Route::post('refresh', 'MemberController@refresh');
        Route::apiResource('order', 'OrderController');
    });
});
