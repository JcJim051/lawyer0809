<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AbogadoController;
use App\Http\Controllers\Admin\ReunionesController;
use App\Http\Controllers\Admin\InformesController;







Route::get('', [AdminController::class, '__invoke'])->name('admin.home');

Route::resource('abogado', AbogadoController::class)->names('admin.abogado');

Route::resource('reuniones', ReunionesController::class)->names('admin.reuniones');

Route::resource('informes',InformesController::class)->names('admin.informes');