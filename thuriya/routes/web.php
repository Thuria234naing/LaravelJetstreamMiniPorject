<?php

use App\Http\Controllers\NewThuriyaController;
use App\Http\Controllers\ThuriyaController;
use App\Http\Middleware\thuriyaMiddleWare;
use GuzzleHttp\Middleware;
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
    return view('main');
})->name('main')->middleware('thuriyaMiddle');
Route::get('admin',[ThuriyaController::class , 'admin'])->name('admin');
// Route::post('register',[NewThuriyaController::class,'register'])->name('registerDone');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    thuriyaMiddleWare::class
])->group(function () {

    Route::get('main/home/',[ThuriyaController::class , 'home'])->name('main#home');
    Route::post('main/create',[ThuriyaController::class,'create'])->name('main#create');
    Route::get('main/getData',[ThuriyaController::class , 'getData'])->name('main#getData');
    Route::get('test',function(){
        return view('test');
    });
    Route::get('main/delete/{id}',[ThuriyaController::class,'delete'])->name('main#delete');
    Route::get('main/seeMore/{id}',[ThuriyaController::class,'seeMore'])->name('main#seeMore');
    Route::get('main/update/{id}',[ThuriyaController::class,'update'])->name('main#update');
    Route::post('main/updateData',[ThuriyaController::class,'updateData'])->name('main#updateData');
});
