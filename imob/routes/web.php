<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CasaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/casas', [CasaController::class, 'index']);
Route::get('/casas/create', [CasaController::class, 'create']);
Route::post('/casas', [CasaController::class, 'store']);
Route::get('/casas/{id}', [CasaController::class, 'show']);
Route::delete('/casas/{id}', [CasaController::class, 'destroy']);
Route::get('/casas/edit/{id}', [CasaController::class, 'edit']);
Route::put('/casas/update/{id}', [CasaController::class, 'update']);
