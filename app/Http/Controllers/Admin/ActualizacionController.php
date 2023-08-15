<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Abogado;
use App\Models\Puestos;
use App\Models\Control;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class ActualizacionController extends Controller
{
    public function mostrarFormulario()
    {
        $abogados = Abogado::all();
        $puestos = Puestos::all();
        // dd($abogados);
        return view('admin.actualizacion.index', compact('abogados', 'puestos'));
    }
    public function procesarFormulario(Request $request)
    {
        $id = request()->codigo_abogado;
        $data= request()->except('_token','codigo_abogado' );
          
       // dd($data) ;
        Abogado::where('id','=', $id)->update($data);
        return redirect()->back()->with('info', 'Reporte de asistencia realizado con exíto');
    }
}
