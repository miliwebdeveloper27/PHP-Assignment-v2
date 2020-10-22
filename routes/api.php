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

use App\Http\Resources\TriptocarbonCollection;
use App\Milescalculation;

Route::get('/tripcalculations', function () {
    return new TriptocarbonCollection(UsermilesController::all());
});

/**
 * Cached routes
 */
Route::middleware('cacheResponse')->group(function () {
    Route::get('/tripcalculations', 'TriptocarbonCollection');
  