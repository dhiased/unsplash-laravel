<?php

use App\Http\Controllers\api\PhotoController;
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

Route::get('all', 'PhotoController@index');
Route::post('addphoto', [PhotoController::class, 'store']);
Route::put('update', 'PhotoController@update');
Route::delete('delete', 'PhotoController@destroy');

Route::get('getByCategory', [PhotoController::class, 'getByCategory']);