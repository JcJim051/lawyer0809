@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
   <div class="row">
    <div class="col-sm-3 col-xs-12">
        <a href="{{route("admin.reuniones.create")}}" class="btn btn-primary btn-sm">Crear Reunion</a>
    </div>
         <div class="col-sm-9 col-xs-12 ">
            <h2>Lista de Reuniones del Equipo Juridico-Electoral</h2>
        </div>
        
    </div> 
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
                            <th>Abogado</th>
                            <th>Fecha</th>
                            <th>Lugar</th>
                            <th>Aforo</th>                           
                            <th>status</th>
                            <th></th>
                            

            
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach ($data as $data)
                            
                        <tr>

                            <td>{{ $data->id}}</td>
                            <td>{{ $data->codigo_abogado}}</td>
                            <td>{{ $data->fecha}}</td>
                            <td>{{ $data->lugar}}</td>
                            <td>{{ $data->aforo}}</td>      
                            <td>
                                @if($data->status == 1)
                                    <i style="color: rgb(22, 161, 22)" class="fas fa-vote-yea"><p hidden>listo</p></i>
                                @else
                                    <i style="color: rgb(235, 62, 10) " class="fas fa-window-close"><p hidden>Pendiente</p></i>
                                @endif
                            </td>                 

                            <td></td>
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
           
             

             }
             );
         })
     </script>
@endsection


