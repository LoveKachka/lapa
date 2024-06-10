<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
//
Route::get('/register', function (){
    return view('registr');})->name('registr.form');

//
Route::post('/register',[UserController::class,'store'])->name('registr.store');

//Маршрут, который открывает пользователю форму для входа в личный кабинет (кнопка «Вход»)
Route::get('/login',[UserController::class,'loginForm'])->name('loginForm');
//Маршрут, по которому открывается в личный кабинет
// Route::get('/user',[UserController::class,'user'])->name('user');


//Маршрут, который вызывает метод проверки подлинности (аутентификацию)
Route::post('/login',[UserController::class,'login'])-> name('login');;


Route::get('/category/create/', [PetController::class, 'create'] )-> name('pet.create');
Route::post('/category',[PetController::class,'store'])->name('pet.store');
Route::get('/status', [StatusController::class, 'store'])->name('status');
Route::get('/pets', [PetController::class, 'index'])->name('pets');
Route::get('/pet/{pet}', [PetController::class, 'show'])->name('pet');


    //Вход в административную панель
    Route::middleware(['auth', 'isadmin'])->group(function () {
      
    });
    //Вход в личный кабинет
    

Route::middleware(['auth'])->group(function () {

});
Route::get('/admin', [UserController::class, 'admin'])->name('admin');
Route::get('/user', [UserController::class, 'user'])->name('user');
//Маршрут, который вызывает метод выхода из аккаунта (кнопка «Выход»)
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/mi', function () {
    return view('mi');
})->name('mi');