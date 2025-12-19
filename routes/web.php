<?php

use App\Http\Controllers\TestController;

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
    return view("welcome");
});

Route::get('/home', function () {
    return view("welcome2");
});

Route::get('/Fargona', [TestController::class, 'Fargona']);
Route::get('/Andijon', [TestController::class, 'Andijon']);
Route::get('/Toshken', [TestController::class, 'Toshken']);
Route::get('/buhoro', [TestController::class, 'buhoro']);
Route::post('/taxi', [TestController::class, 'taxi']);




