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
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Correo</th>                           
                            <th></th>
                            <th></th>
            
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach ($data as $data)
                            
                        <tr>

                            <td>{{ $data->id}}</td>
                            <td>{{ $data->nombre}}</td>
                            <td>{{ $data->telefono}}</td>
                            <td>{{ $data->direccion}}</td>
                            <td>{{ $data->correo}}</td>                 

                            <td> <a href="{{route("admin.abogado.edit", $data)}}" class="btn btn-primary btn-sm">editar</a></td>
                           <td>
                               <form action=" {{ route("admin.abogado.destroy", $data) }} " method="post">
                                   @csrf
                                   {{method_field('DELETE')}}
                                   <input  class="btn btn-danger" type="submit" onclick="return confirm ('¿desea borrar el Abogado?')" value="Borrar">
                               </form>

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
           
             

             }
             );
         })
     </script>
@endsection


