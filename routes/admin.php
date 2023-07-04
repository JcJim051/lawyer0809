<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AbogadoController;







Route::get('', [AdminController::class, '__invoke'])->name('admin.home');


Route::resource('abogado', AbogadoController::class)->names('admin.abogado');

