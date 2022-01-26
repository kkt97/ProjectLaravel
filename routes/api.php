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
//Route::middleware('auth:sanctum')->get('/login/authenticated', function () {
//    return true;
//});

//Route::get('/login', [LoginController::class, 'index']) -> name('login');
Route::post('/login/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/login/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::apiResources([
    '/foos' => \App\Http\Controllers\Api\v1\Foo\FoosController::class,
    '/registers' => \App\Http\Controllers\Auth\RegistersController::class,
    '/idrequests' => \App\Http\Controllers\Auth\FindIDsController::class,
    '/passrequests' => \App\Http\Controllers\Auth\FindPasssController::class,
    '/players' => \App\Http\Controllers\Api\v1\Player\PlayersController::class,
    '/login' => \App\Http\Controllers\Auth\LoginController::class,
    '/blog' => \App\Http\Controllers\Blog\BlogController::class,
]);
