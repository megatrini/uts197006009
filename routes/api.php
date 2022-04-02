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
Route::get('/api/user',[\App\Http\Controllers\WrapperController::class, 'user'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('user');
Route::get('/api/Get_motivasi',[\App\Http\Controllers\WrapperController::class, 'motivasi'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('motivasi');
Route::post('/api/registrasi',[\App\Http\Controllers\WrapperController::class, 'registrasi'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('registrasi');
Route::post('/api/dev/POSTmotivasi',[\App\Http\Controllers\WrapperController::class, 'postmotivasi'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('postmotivasi');
Route::post('/api/login',[\App\Http\Controllers\WrapperController::class, 'login'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('login');
Route::get('/user/identitas', function (){
    return [
        'code' => 0,
        'data' => [
            'npm' =>'197006009',
            'nama' => 'Mega Trini Oktaviani',
            'email' => '197006009@student.unsil.ac.id'
        ]
        ];
})
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)    
    ->name('identitas');