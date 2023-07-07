@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h2>Lista de reuniones privadas realizadas por los Abogado  </h2>
@stop

@section('content')
        @if (session('info'))
        <div class="alert alert-success">
            <strong>{{(session('info'))}}</strong>
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.reuniones.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h6>Datos de la reunión</h6>
                                </div>
                                <div class="col-md-3" hidden>
                                    <label for="status">¿La reunion se realizo?</label>
                                    <select  name="status" id="status">
                                        <option selected value="0">No</option>
                                        <option value="1">Si</option>

                                    </select>
                                </div>
                            </div>
                           
                        </div>    
                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col-sm-12 ">
                                    <div class="row">
                                        <div class="col-sm-4">                        
                                            <label for="nombre">Abogado </label>
                                            <select class="form-control" type="text" id="codigo_abogado" name="codigo_abogado" >
                                                <option value="0">Seleccione <i class="fa fa-undo" aria-hidden="true"></i></option>
                                                @foreach ($data as $data)
                                                    <option value=" {{$data->id}} ">{{$data->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-3">                        
                                            <label for="fecha">Fecha</label>
                                            <input type="date" class="form-control" id="fecha" name="fecha">                                         
                                         </div>
                                       
            
                                         
                                        <div class="col-sm-3">                        
                                            <label for="correo">Lugar</label>
                                            <input class="form-control" type="text" id="lugar" name="lugar" placeholder="Digite  la direccion">
                                        </div>
                                        <div class="col-sm-2 ">                        
                                            <label for="direccion">Aforo</label>
                                            <input class="form-control" type="text" id="aforo" name="aforo" placeholder="Numero de Personas">
                                        </div>
                                                                
            
                                    </div><br>

                                   
                                    
                                </div>

                                
                                
                                
                            </div>
                                
                            
                        </div> 
                    </div>
                    
                  
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Crear Reunió<nav></nav></button>
                    </div>
                      <br>

                </form>
            </div>
        </div>

@stop

