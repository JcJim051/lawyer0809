@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h2>Ver informacion del Abogado, Asistencias y Reuniones</h2>
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
                                        <input hidden readonly class="form-control" type="text" id="id" name="id" placeholder="Nombre" value=" {{$data->id}} ">

                                        <div class="col-sm-4">                        
                                            <label for="nombre">Nombre Completo</label>
                                            <input  readonly class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" value=" {{$data->nombre}} ">
                                        </div>
                                        <div class="col-sm-3">                        
                                            <label for="cc">Cedula de Ciudadania</label>
                                            <input readonly class="form-control" type="text" id="cc" name="cc" placeholder="Documento" value=" {{$data->cc}} ">
                                        </div>
                                        <div class="col-sm-5">                        
                                            <label for="correo">Correo</label>
                                            <input  readonly class="form-control" type="email" id="correo" name="correo" placeholder="E-mail" value=" {{$data->correo}} ">
                                        </div>
            
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-6">                        
                                            <label for="direccion">Dirección</label>
                                            <input readonly class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion" value=" {{$data->direccion}} ">
                                        </div>
                                        <div class="col-sm-3">                        
                                            <label for="comuna">Comuna</label>
                                            <input readonly class="form-control" type="text" id="comuna" name="comuna" placeholder="Comuna" value=" {{$data->comuna}}">
                                        </div>    
                                        <div class="col-sm-3">                        
                                            <label for="comuna">Fecha de ingreso</label>
                                            <input readonly class="form-control" type="text" id="fecha_inicio" name="fecha_inicio" value=" {{$data->fecha_inicio}}">
                                        </div>                                 
            
                                    </div><br>

                                    <div class="row">
                                        <div class="col-sm-3">                        
                                        <label for="puesto">Telefono</label>
                                        <input readonly class="form-control" type="text" id="telefono" name="telefono" placeholder="Numero" value=" {{$data->telefono}} ">
                                    </div>
                                        
                                        <div class="col-sm-5">                        
                                            <label for="puesto">Puesto de Votación</label>
                                            <input readonly class="form-control" type="text" id="puesto" name="puesto" placeholder="Puesto de votacion" value=" {{$data->puesto}} ">
                                        </div>
                                        <div class="col-sm-4">                        
                                            <label for="mesa">Mesa</label>
                                            <input readonly class="form-control" type="text" id="mesa" name="mesa" placeholder="Mesa" value=" {{$data->mesa}} ">
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
                                    
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                                
                            <div class="row">
                                <div class="col-sm-3">                        
                                    <label for="comuna">Fecha de ingreso</label>
                                    <input readonly class="form-control" type="date" id="fecha_inicio" name="fecha_inicio" placeholder="dia/mes/año" value="{{$data->fecha_inicio}}" required>
                                </div>  
                                <div class="col-sm-3">                        
                                    <label for="alcaldia">¿Camapaña anterior?</label>
                                    <select  required class="form-control" name="alcaldia" id="alcaldia">
                                        <option value= "{{$data->alcaldia}}">{{$data->alcaldia}}</option>
                                        
                                    </select>
                                </div>  
                                
                                <div class="col-sm-6">
                                    <label for="Pdf">pdf de la cedula</label>
                                  <br>

                                    @if ($data->pdf_cc == null)
                                        
                                    @else
                                        <a  target="_blank" href="{{asset('storage/'.$data->pdf_cc)}}">Ver Cedula cargada</a>
                                    @endif

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="rol_actual">¿Cual es el rol que desempeña en la campaña actual?</label>
                                    <input readonly class="form-control" type="text" name="rol_acutal" id="rol_actual" value="{{$data->rol_actual}}">
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
                                    <label  for="estudios">Nivel de estudios</label>
                                    <select readonly class="form-control"  id="estudios" name="estudios">
                                        <option value= "{{$data->estudios}}">{{$data->estudios}}</option>
                                        
                                    </select>                                   
                                </div>
                                <div class="col-sm-6">
                                    <label for="titulo">Titulo Obtenido</label>
                                    <input readonly type="text" class="form-control" id="titulo" name="titulo" value="{{$data->titulo}}" >
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
                                <div class="col-sm-12">
                                    <label for="experiencia">Experiencia</label>
                                    <textarea readonly class="form-control" id="experiencia" name="experiencia" placeholder="Describa brevemente el campo de experiencia" >{{$data->experiencia}}</textarea>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="titulo">¿Es Funcionario Publico?</label>
                                    <Select readonly name="funcionario" id="funcionario" class="form-control">
                                        
                                        <option value="$data->funcionario"> @if ($data->funcionario== 0)
                                            No
                                        @else
                                            Si
                                        @endif</option>
                                        
                                        
                                        
                                    </Select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lugar">Municipio donde de trabaja</label>
                                    <input readonly type="text" class="form-control" id="lugar" name="lugar" value="{{$data->lugar}}" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="electoral">¿Ha trabajado en proceso electoral anteriormente?</label>
                                    <select readonly name="electoral" id="electoral" class="form-control">
                                        <option value="{{$data->electoral}}">{{$data->electoral}}</option>
                                        
                                        
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="rol">¿En que rol?</label>
                                    <select  readonly name="rol" id="rol" class="form-control">
                                        <option selected value="{{ $data->rol}}" >{{ $data->rol}}</option>
                                                                         
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
                                        <div  class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                                    </div>
                                    <input readonly type="text" class="form-control" id="face" name="face" placeholder="@" value="{{$data->face}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="sr-only" for="inlineFormInputGroup"></label>
                                    <div class="mb-2 input-group">
                                    <div class="input-group-prepend">
                                        <div readonly class="input-group-text"><i class="fab fa-instagram"></i></div>
                                    </div>
                                    <input readonly  type="text" class="form-control" id="insta" name="insta" placeholder="@" value="{{$data->insta}}">
                                    </div>
                                </div>
                            </div>                                                  

                                
                        </div>

                       
                        
                    </div> 
                    </div>
                    <div class="col-sm-10">
                        
                      </div>
                      <br>

                     {!! Form::close() !!}
            </div>
            <div class="row">
                <div class="col-sm-6">
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
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Historial de reuniones</h4>
                        </div>    
                        <div class="card-body">
                            <table  id="example1" class="display responsive nowrap" style="width:99%">
                                <thead style="tab-size: 10px">
                                    <tr>
                                        <th>#</th>
                                        <th>Lugar de La reunion</th>
                                        <th>Aforo</th>
                                        <th>Fecha</th>
                                       
                        
                                    </tr>
                                </thead>
                        
                                <tbody>
                                   
                                        @foreach ($reunion as $reunion)
                                            
                                       
                                    <tr>
            
                                       
                                        @if ($reunion->status == 1)
                                            <td style="color:green"> {{$reunion->id}}</td> 
                                            <td style="color:green"> {{$reunion->lugar}}</td>
                                            <td style="color:green"> {{$reunion->aforo}}</td>
                                            <td style="color:green"> {{$reunion->fecha}}</td> 
                                        @else
                                        <td style="color:red"> {{$reunion->id}}</td> 
                                        <td style="color:red"> {{$reunion->lugar}}</td>
                                        <td style="color:red"> {{$reunion->aforo}}</td>
                                        <td style="color:red"> {{$reunion->fecha}}</td> 
                                        @endif
                                        

                                       
            
                                      
                                    </tr>
                                        
                                    @endforeach
                        
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>

@stop
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
@endsection



@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script>$(document).ready(function () {
        $('#example').DataTable({
            
            "pageLength": 25,
             "columnDefs": [

           

             ],
             
           
             

             }
             );
         })

         $(document).ready(function () {
        $('#example1').DataTable({
            
            "pageLength": 25,
             "columnDefs": [

           

             ],
           
             

             }
             );
         })
     </script>
@endsection




