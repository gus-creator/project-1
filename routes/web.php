<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProgramaController;

Route::get('/', function () {
    //return view('dashboardAdmin');
});
Route::get('/dashboard', function () {
    return view('inicio');
});
Route::view('/dashboard/inicio','inicio')->name('inicio');
Route::get('/programas/{tipo}', [ProgramaController::class, 'index'])->name('programas.index');
Route::post('/programas/store/{tipo}', [ProgramaController::class, 'store'])->name('programas.store');