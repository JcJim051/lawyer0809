<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Abogado;
use Illuminate\Support\Facades\DB;

class AbogadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Abogado::all();

        // dd($data);
        return view('admin.abogados.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abogados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nombre' => 'required',
        //     'cc' => 'required',
        //     'correo' => 'required',
        //     'telefono' => 'required ',
        // ]);

        $data= request()->except('_token');

        if ($request->hasFile('foto')){
          $data['foto']= $request->file('foto')->store('fotos','public');
        }
        if ($request->hasFile('pdf_cc')){
            $data['pdf_cc']= $request->file('pdf_cc')->store('cc','public');
          }

        Abogado::insert($data);

        // dd($data);

       

        return  redirect()->route('admin.abogado.index')->with('info', 'Abogado creado con exito');     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($data)
    {   
        $data = Abogado::findOrFail($data);
        
        return view('admin.abogados.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function update(Request $request,Abogado $data)
    {
        $datos= $request->except('_token','_method');
        if ($request->hasFile('foto')){
            $datos['foto']= $request->file('foto')->store('fotos','public');
          }
        if ($request->hasFile('pdf_cc')){
              $datos['pdf_cc']= $request->file('pdf_cc')->store('cc','public');
            }
       
        
        
        $id= $request->id;
        Abogado::where('id','=', $id)->update($datos);

         return redirect()->route('admin.abogado.index')->with('info', 'Abogado Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($data)
    {
        
        Abogado::where('id','=', $data)->delete();

        return redirect()->route('admin.abogado.index')->with('info', 'El Abogado se borro correctamente');
    }
}
