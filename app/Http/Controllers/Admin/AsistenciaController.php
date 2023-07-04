<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Facades\DB;

class AsistenciaController extends Controller
{
    public function mostrarFormulario()
    {
        return view('admin.formulario.index');
    }
    public function procesarFormulario(Request $request)
    {
        // Procesar los datos del formulario y realizar las acciones necesarias

        return redirect()->back()->with('success', '¡Formulario enviado correctamente!');
    }
}
