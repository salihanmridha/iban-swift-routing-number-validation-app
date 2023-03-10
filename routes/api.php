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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("V1")->group(function () {
    Route::get(
        '/verify-routing-number',
        [\App\Http\Controllers\API\V1\RoutingNumberVerificationController::class, 'store']
    )->name('api.verify.routing.number');

    Route::get(
        '/verify-swift-code',
        [\App\Http\Controllers\API\V1\SwiftCodeVerificationController::class, 'store']
    )->name('api.verify.swift.code');

    Route::get(
        '/verify-iban-number',
        [\App\Http\Controllers\API\V1\IbanNumberVerificationController::class, 'store']
    )->name('api.verify.iban.number');
});
