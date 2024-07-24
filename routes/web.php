<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProgramaController;

Route::get('/', function () {
    return view('dashboardAdmin');
});

Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/programas/{tipo}', [ProgramaController::class, 'index'])->name('programas.index');