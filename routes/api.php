<?php

use App\Http\Controllers\PetApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//выводвсех питомцев
Route::get('/pet',[PetApiController::class, 'index']);

//вывод питомца по айди
Route::get('/pet/{pet}',[PetApiController::class, 'show']);

//поиск товара
Route::get('/search',[PetApiController::class,'search']);

//добавление
Route:: post('/pet',[PetApiController::class, 'store']);

