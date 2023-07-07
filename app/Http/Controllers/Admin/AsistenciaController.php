<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Abogado;
use App\Models\Control;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class AsistenciaController extends Controller
{
    public function mostrarFormulario()
    {
        $fechaHoraActual = Carbon::now();
        $fechaHoraActual=$fechaHoraActual->setTimezone('America/Bogota');
        $abogados = Abogado::all();
        // dd($abogados);
        return view('admin.formulario.index', compact('abogados','fechaHoraActual'));
    }
    public function procesarFormulario(Request $request)
    {
        
        $data= request()->except('_token');
        //dd($data);
        Control::insert($data);
        
        return redirect()->back()->with('info', 'Reporte de asistencia realizado con exíto');
    }
}
