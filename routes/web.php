<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AsistenciaController;
use App\Http\Controllers\Admin\ActualizacionController;
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

Route::get('/asistencia', [AsistenciaController::class, 'mostrarFormulario']);
Route::post('/asisitencia', [AsistenciaController::class, 'procesarFormulario'])->name('procesarFormulario');
Route::get('/asistencia-manual', [AsistenciaController::class, 'mostrarFormulario1']);
Route::post('/asistencia-manual', [AsistenciaController::class, 'procesarFormulario1'])->name('procesarFormulario1');


Route::get('/actualizar', [ActualizacionController::class, 'mostrarFormulario']);
Route::post('/actualizar', [ActualizacionController::class, 'procesarFormulario'])->name('procesarActualizacion');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});
