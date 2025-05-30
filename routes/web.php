<?php

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

Route::get('/', [ \App\Http\Controllers\FrontController::class, 'index' ])->name('front.index');

Route::get('/about/{id}',  [ \App\Http\Controllers\FrontController::class, 'singlArticle' ])->name('front.about');
Route::get('/category/{category}',  [ \App\Http\Controllers\FrontController::class, 'CategoryArticles' ])->name('front.about');
Route::get('/authorization',  [ \App\Http\Controllers\AuthorizationController::class, 'Authorization' ])->name('authorization.logIn');
Route::get('/registration',  [ \App\Http\Controllers\AuthorizationController::class, 'Registration' ])->name('authorization.registration');
Route::post('/toaccount',  [ \App\Http\Controllers\AuthorizationController::class, 'LogToAcc' ]);
Route::post('/newcomment/{idart}',  [ \App\Http\Controllers\FrontController::class, 'CreatNewComment' ]);
Route::get('/outaccount',  [ \App\Http\Controllers\AuthorizationController::class, 'OutAccount' ]);
Route::Post('/registracc',  [ \App\Http\Controllers\AuthorizationController::class, 'RegistrAcc' ]);




//127.0.0.1
