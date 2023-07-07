@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h2>Editar Abogado</h2>
@stop

@section('content')
        @if (session('info'))
        <div class="alert alert-success">
            <strong>{{(session('info'))}}</strong>
        </div>
        @endif 

        <div class="card">
            <div class="card-body">
                {!! Form::model($data, ['route' => ['admin.abogado.update',$data], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                    

                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h6>Datos Personales</h6>
                        </div>    
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <input hidden class="form-control" type="text" id="id" name="id" placeholder="Nombre" value=" {{$data->id}} ">

                                        <div class="col-sm-4">                        
                                            <label for="nombre">Nombre Completo</label>
                                            <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" value=" {{$data->nombre}} ">
                                        </div>
                                        <div class="col-sm-3">                        
                                            <label for="cc">Cedula de Ciudadania</label>
                                            <input class="form-control" type="text" id="cc" name="cc" placeholder="Documento" value=" {{$data->cc}} ">
                                        </div>
                                        <div class="col-sm-5">                        
                                            <label for="correo">Correo</label>
                                            <input class="form-control" type="email" id="correo" name="correo" placeholder="E-mail" value=" {{$data->correo}} ">
                                        </div>
            
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-6">                        
                                            <label for="direccion">Dirección</label>
                                            <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion" value=" {{$data->direccion}} ">
                                        </div>
                                        <div class="col-sm-3">                        
                                            <label for="comuna">Comuna</label>
                                            <input class="form-control" type="text" id="comuna" name="comuna" placeholder="Comuna" value=" {{$data->comuna}}">
                                        </div>    
                                        <div class="col-sm-3">                        
                                            <label for="comuna">Fecha de ingreso</label>
                                            <input class="form-control" type="text" id="fecha_inicio" name="fecha_inicio" value=" {{$data->fecha_inicio}}">
                                        </div>                                   
            
                                    </div><br>

                                    <div class="row">
                                        <div class="col-sm-3">                        
                                            <label for="puesto">Telefono</label>
                                            <input class="form-control" type="text" id="telefono" name="telefono" placeholder="Numero" value=" {{$data->telefono}} ">
                                        </div>
                                        <div class="col-sm-5">                        
                                            <label for="puesto">Puesto de Votación</label>
                                            <input class="form-control" type="text" id="puesto" name="puesto" placeholder="Puesto de votacion" value=" {{$data->puesto}} ">
                                        </div>
                                        <div class="col-sm-4">                        
                                            <label for="mesa">Mesa</label>
                                            <input class="form-control" type="text" id="mesa" name="mesa" placeholder="Mesa" value=" {{$data->mesa}} ">
                                        </div>
                                    </div>
                                    
                                </div>

                                
                                <div class="text-center col-sm-4">
                                    <div class="card card-outline">
                                        <div class="card-header">
                                            <h6>Foto</h6>
                                        </div>    
                                        <div class="card-body">
                                
                                    <img src="  {{asset('storage/'.$data->foto)}} "height="180px" alt="Foto">
                                    <input class="form-grup" type="file" name="foto" id="foto">
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                                
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="Pdf">pdf de la cedula</label>
                                    <input class="form-grup" type="file" name="pdf_cc" id="pdf_cc" >

                                    @if ($data->pdf_cc == null)
                                        
                                    @else
                                        <a  target="_blank" href="{{asset('storage/'.$data->pdf_cc)}}">Ver Cedula cargada</a>
                                    @endif

                                </div>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h4>Academicos</h4>
                        </div>    
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">                        
                                    <label for="estudios">Nivel de estudios</label>
                                    <select class="form-control"  id="estudios" name="estudios">
                                        <option value= "{{$data->estudios}}">{{$data->estudios}}</option>
                                        <option value="profesional">Profesional</option>
                                        <option value="especialista">Especializacion</option>
                                        <option value="maestria">Maestria</option>
                                        <option value="doctorado">Doctorado</option>
                                    </select>                                   
                                </div>
                                <div class="col-sm-6">
                                    <label for="titulo">Titulo Obtenido</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{$data->titulo}}" >
                                </div>
                            </div>
                        </div>
                    </div>     
                    <br>
                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <h6>Laboral</h6>
                        </div>    
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="experiencia">Experiencia</label>
                                    <textarea class="form-control" id="experiencia" name="experiencia" placeholder="Describa brevemente el campo de experiencia" >{{$data->experiencia}}</textarea>
                                </div>
                                <div class="col-sm-6">
                                    <label for="titulo">¿Es Funcionario Publico?</label>
                                    <Select name="funcionario" id="funcionario" class="form-control">
                                        
                                         @if ($data->funcionario == 0)
                                            <option selected value="0">No</option>
                                            <option value="1">Si</option>
                                         @else
                                            <option selected value="1">Si</option>
                                            <option  value="0">No</option>
                                            
                                         @endif
                                        
                                        
                                        
                                    </Select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="electoral">¿Ha trabajado en proceso electoral anteriormente?</label>
                                    <select name="electoral" id="electoral" class="form-control">
                                        <option value="{{$data->electoral}}">{{$data->electoral}}</option>
                                        <option value="si">Si</option>                                    
                                        <option value="no">No</option>
                                        
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="rol">¿En que rol?</label>
                                    <select name="rol" id="rol" class="form-control">
                                        <option selected value="{{ $data->rol}}" >{{ $data->rol}}</option>
                                        <option value="ninguno">Ninguno</option>    
                                        <option value="testigo">Testigo</option>                                    
                                        <option value="coordinado">Coordinador de puesto</option>
                                        <option value="escrutador_zonal">Testigo de Escrutinios Zonal </option>
                                        <option value="escrutador_municipal">Testigo de Escrutinios Municipal</option>
                                        <option value="escrutador_departamental">Testigo de Escrutinios Departamental</option>
                                        <option value="escrutador_nacional">Testigo de Escrutinios Nacional</option>
                                        <option value="registraduria">Funcionario de laregistraduria</option>
                                        <option value="mesa_de_justicia">Mesa de Justicia</option>
                                        <option value="coordinado">Coordinador</option>                                    
                                    </select>
                                </div>
                            </div>
                        </div> 
                    </div>
                      
                    
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h6>Redes sociale</h6>
                        </div>    
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="sr-only" for="inlineFormInputGroup"></label>
                                    <div class="mb-2 input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="face" name="face" placeholder="@" value="{{$data->face}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="sr-only" for="inlineFormInputGroup"></label>
                                    <div class="mb-2 input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="insta" name="insta" placeholder="@" value="{{$data->insta}}">
                                    </div>
                                </div>
                            </div>                                                  

                                
                        </div>

                       
                        
                    </div> 
                    </div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Editar</button>
                      </div>
                      <br>

                     {!! Form::close() !!}
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Historial de Asistencias</h4>
                </div>    
                <div class="card-body">
                    <table  id="example" class="display responsive nowrap" style="width:99%">
                        <thead style="tab-size: 10px">
                            <tr>
                                <th>#</th>
                                <th>Lugar de La reunion</th>
                                <th>Motivo</th>
                                <th>Fecha</th>
                               
                
                            </tr>
                        </thead>
                
                        <tbody>
                           
                                @foreach ($datos as $datos)
                                    
                               
                            <tr>
    
                                <td> {{$datos->id}}</td>
                                <td> {{$datos->lugar}}</td>
                                <td> {{$datos->motivo}}</td>
                                <td> {{$datos->fecha}}</td>
                               
    
                              
                            </tr>
                                
                            @endforeach
                
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>

@stop

