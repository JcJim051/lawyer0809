@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h2>Caracterizacion de Abogado</h2>
@stop

@section('content')
        @if (session('info'))
        <div class="alert alert-success">
            <strong>{{(session('info'))}}</strong>
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.abogado.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h6>Datos Personales</h6>
                        </div>    
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-4">                        
                                            <label for="nombre">Nombre Completo</label>
                                            <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                                        </div>
                                        <div class="col-sm-4">                        
                                            <label for="cc">Cedula de Ciudadania</label>
                                            <input class="form-control" type="text" id="cc" name="cc" placeholder="Documento" required>
                                        </div>
                                        <div class="col-sm-4">                        
                                            <label for="correo">Correo</label>
                                            <input class="form-control" type="email" id="correo" name="correo" placeholder="E-mail" required>
                                        </div>
            
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-6">                        
                                            <label for="direccion">Dirección</label>
                                            <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion" required>
                                        </div>
                                        <div class="col-sm-6">                        
                                            <label for="comuna">Comuna</label>
                                            <input class="form-control" type="text" id="comuna" name="comuna" placeholder="Comuna" required>
                                        </div>    
                                       

            
                                    </div><br>

                                    <div class="row">
                                        <div class="col-sm-3">                        
                                            <label for="puesto">Telefono</label>
                                            <input class="form-control" type="text" id="telefono" name="telefono" placeholder="Numero" required>
                                        </div>
                                        <div class="col-sm-5">                        
                                            <label for="puesto">Puesto de Votación</label>
                                            <input class="form-control" type="text" id="puesto" name="puesto" placeholder="Puesto de votacion" required>
                                        </div>
                                        <div class="col-sm-4">                        
                                            <label for="mesa">Mesa</label>
                                            <input class="form-control" type="text" id="mesa" name="mesa" placeholder="Mesa" required>
                                        </div>
                                    </div>
                                    
                                </div>

                                
                                <div class="text-center col-sm-4">
                                    <div class="card card-outline">
                                        <div class="card-header">
                                            <h6>Foto</h6>
                                        </div>    
                                        <div class="card-body">
                                    <img src={{asset('assets/img/users.png') }} height="180px" alt="Foto">
                                    <input class="form-grup" type="file" name="foto" id="foto">
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                                
                            <div class="row">
                                <div class="col-sm-3">                        
                                    <label for="comuna">Fecha de ingreso</label>
                                    <input class="form-control" type="date" id="fecha_inicio" name="fecha_inicio" placeholder="dia/mes/año" required>
                                </div>  
                                <div class="col-sm-3">                        
                                    <label for="alcaldia">¿Camapaña anterior?</label>
                                    <select class="form-control" name="alcaldia" id="alcaldia">
                                        <option value="0">Seleccione una opción</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>  
                                <div class="col-sm-6">
                                    <label for="Pdf">pdf de la cedula</label>
                                    <input class="form-control" type="file" name="pdf_cc" id="pdf_cc">

                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="rol_actual">¿Cual es el rol que desempeña en la campaña actual?</label>
                                    <input class="form-control" type="text" name="rol_actual" id="rol_actual">
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
                                        <option value="">Seleccione una opcion</option>
                                        <option value="profesional">Estudiante</option>
                                        <option value="profesional">Judicante</option>
                                        <option value="profesional">Profesional</option>
                                        <option value="especialista">Especializacion</option>
                                        <option value="maestria">Maestria</option>
                                        <option value="doctorado">Doctorado</option>
                                    </select>                                   
                                </div>
                                <div class="col-sm-6">
                                    <label for="titulo">Titulo Obtenido</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo"  >
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
                                <div class="col-sm-8">
                                    <label for="experiencia">Experiencia</label>
                                    <textarea class="form-control" id="experiencia" name="experiencia" placeholder="Describa brevemente el campo de experiencia" ></textarea>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="titulo">¿Es Funcionario Publico?</label>
                                    <Select name="funcionario" id="funcionario" class="form-control">
                                        <option value="">Seleccione una opcion</option>
                                        <option value="0">No</option>
                                        <option value="1">Si</option>
                                    </Select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lugar">Municipio donde de trabaja</label>
                                    <input type="text" class="form-control" id="lugar" name="lugar" > 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="electoral">¿Ha trabajado en proceso electoral anteriormente?</label>
                                    <select name="electoral" id="electoral" class="form-control">
                                        <option value="">Seleccione una opcion</option>
                                        <option value="si">Si</option>                                    
                                        <option value="no">No</option>
                                        
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="rol">¿En que rol?</label>
                                    <select name="rol" id="rol" class="form-control">
                                        <option value="">Seleccione una opcion</option>
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
                                        <option value="jurado">Jurado Votación</option>                                  
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
                                    <input type="text" class="form-control" id="face" name="face" placeholder="@">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="sr-only" for="inlineFormInputGroup"></label>
                                    <div class="mb-2 input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="insta" name="insta" placeholder="@">
                                    </div>
                                </div>
                            </div>                                                  

                                
                        </div>

                       
                        
                    </div> 
                    </div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Crear</button>
                      </div>
                      <br>

                </form>
            </div>
        </div>

@stop

