<?php

use App\Http\Controllers\AuthController;
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


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
/*     Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('refresh', [App\Http\Controllers\AuthController::class, 'refresh']);
    Route::post('me', [App\Http\Controllers\AuthController::class, 'me']); */
    
});

Route::group([
    'middleware' => 'jwt.auth',
    'prefix' => 'promo'
], function () {

    Route::get('/', [App\Http\Controllers\PromoController::class, 'index']);    
    Route::get('/{id}', [App\Http\Controllers\PromoController::class, 'show']);
    Route::post('/create', [App\Http\Controllers\PromoController::class, 'store']);
    Route::put('/edit/{id}', [App\Http\Controllers\PromoController::class, 'update']);
    Route::delete('/delete/{id}', [App\Http\Controllers\PromoController::class, 'destroy']);
    
});

Route::group([
    'middleware' => 'jwt.auth',
    'prefix' => 'student'
], function () {

    Route::get('/', [App\Http\Controllers\StudentController::class, 'index']);    
    Route::get('/{id}', [App\Http\Controllers\StudentController::class, 'show']);
    Route::post('/create', [App\Http\Controllers\StudentController::class, 'store']);
    Route::put('/edit/{id}', [App\Http\Controllers\StudentController::class, 'update']);
    Route::delete('/delete/{id}', [App\Http\Controllers\StudentController::class, 'destroy']);
    
});

Route::group([
    'middleware' => 'jwt.auth',
    'prefix' => 'intervenant'
], function () {

    Route::get('/', [App\Http\Controllers\IntervenantController::class, 'index']);    
    Route::get('/{id}', [App\Http\Controllers\IntervenantController::class, 'show']);
    Route::post('/create', [App\Http\Controllers\IntervenantController::class, 'store']);
    Route::put('/edit/{id}', [App\Http\Controllers\IntervenantController::class, 'update']);
    Route::delete('/delete/{id}', [App\Http\Controllers\IntervenantController::class, 'destroy']);
    
});

Route::group([
    'middleware' => 'jwt.auth',
    'prefix' => 'cours'
], function () {

    Route::get('/', [App\Http\Controllers\CoursController::class, 'index']);    
    Route::get('/{id}', [App\Http\Controllers\CoursController::class, 'show']);
    Route::post('/create', [App\Http\Controllers\CoursController::class, 'store']);
    Route::put('/edit/{id}', [App\Http\Controllers\CoursController::class, 'update']);
    Route::delete('/delete/{id}', [App\Http\Controllers\CoursController::class, 'destroy']);
    
});

Route::group([
    'middleware' => 'jwt.auth',
    'prefix' => 'note'
], function () {

    Route::get('/', [App\Http\Controllers\NoteController::class, 'index']);    
    Route::get('/{id}', [App\Http\Controllers\NoteController::class, 'show']);
    Route::post('/create', [App\Http\Controllers\NoteController::class, 'store']);
    Route::put('/edit/{id}', [App\Http\Controllers\NoteController::class, 'update']);
    Route::delete('/delete/{id}', [App\Http\Controllers\NoteController::class, 'destroy']);
    
});

