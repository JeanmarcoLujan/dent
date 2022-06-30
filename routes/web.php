<?php

use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::resource('profile', '\App\Http\Controllers\profile\ProfileController');
});

Route::group(['middleware' => 'auth:sanctum', 'prefix' => 'administracion',], function () {
    Route::resource('especialidad', '\App\Http\Controllers\administration\SpecialtyController');
    Route::resource('concepto', '\App\Http\Controllers\administration\ConceptController');
    Route::resource('diagnostico', '\App\Http\Controllers\administration\DiagnosticController');
    Route::resource('colaborador', '\App\Http\Controllers\administration\CollaboratorController');
    Route::resource('examen', '\App\Http\Controllers\administration\ExamController');
});



Route::group(['middleware' => 'auth:sanctum', 'prefix' => 'contabilidad',], function () {
    Route::resource('ingreso', '\App\Http\Controllers\accounting\IngresoController');
    Route::resource('egreso', '\App\Http\Controllers\accounting\EgresoController');
});

Route::group(['middleware' => 'auth:sanctum', 'prefix' => 'consultoria',], function () {
    Route::resource('paciente', '\App\Http\Controllers\consulting\PatientController');
});




