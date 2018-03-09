<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('notifications', function () {
    return response(['Product 1', 'Product 2', 'Product 3'], 200);
});

Route::get('notifications/{notification}', function ($notificationId) {
    return response()->json(['notificationId' => "{$notificationId}"], 200);
});


Route::post('notifications', function () {
    return response()->json([
        'message' => 'Create success'
    ], 201);
});

Route::put('notifications/{notification}', function () {
    return response()->json([
        'message' => 'Update success'
    ], 200);
});

Route::delete('notifications/{notification}', function () {
    return response()->json(null, 204);
});