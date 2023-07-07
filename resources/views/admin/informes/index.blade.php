@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h2>Lista de Abogados</h2>
@stop

@section('content')
        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{(session('info'))}}</strong>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <table  id="example" class="display responsive nowrap" style="width:99%">
                    <thead style="tab-size: 10px">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>cc</th>
                            <th>Correo</th>  
                            <th>Telefono</th>
                            <th>direccion</th>  
                            <th>comuna</th>  
                            
                            <th>puesto</th>
                            <th>mesa</th>
                            <th>fecha inicio</th>
                            <th>estudios</th>
                            <th>titulo</th>
                            <th>Fun Publico</th>

                            <th>experiencia</th>
                            <th>electoral</th>
                            <th>rol</th>
                            <th>face</th>
                            <th>insta</th>
                          
                            
            
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach ($data as $data)
                            
                        <tr>

                            <td>{{ $data->id}}</td>
                            <td>{{ $data->nombre}}</td>
                            <td>{{ $data->cc}}</td>
                            <td>{{ $data->correo}}</td>
                            <td>{{ $data->telefono}}</td>                 
                            <td>{{ $data->direccion}}</td>   
                            <td>{{ $data->comuna}}</td>    
                            <td>{{ $data->puesto}}</td>    
                            <td>{{ $data->mesa}}</td>  
                            <td>{{ $data->fecha_inicio}}</td>      
                            <td>{{ $data->estudios}}</td>    
                            <td>{{ $data->titulo}}</td>    
                            <td>{{ $data->funcionario}}</td>    
                            <td>{{ $data->experiencia}}</td>    
                            <td>{{ $data->electoral}}</td>    
                            <td>{{ $data->rol}}</td>    
                            <td>{{ $data->face}}</td>    
                            <td>{{ $data->insta}}</td>    
                            

                           </td>
                        </tr>
                            
                       @endforeach
            
                    </tbody>
                    
                </table>
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
                 "dom": 'Bfrtip',
                "buttons": [
                {
                "extend": 'excelHtml5',
                "title": 'abogados_caracterizados_xls'
                 },
                
            ]
 
             }
             );
         })
     </script>
@endsection


