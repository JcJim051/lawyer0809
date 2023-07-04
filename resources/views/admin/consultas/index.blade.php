@extends('adminlte::page')

@section('title', 'Consultar E14')

@section('content_header')
    <h1 style="text-align: center">E14 por Mesa</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{(session('info'))}}</strong>
        </div>
    @endif

<div class="card">
        <div class="card-body">
            <table id="example" class="display responsive nowrap" style="width:98%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Municipio</th>
                        <th>Puesto</th>
                        <th>Mesa</th>
                        <th>link E14</th>
                        <th>link Reclamación</th>
                        <th>Comisión</th>
                        <th>Codpuesto</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($sellers as $seller)
                    <tr>
                        <td>{{ $seller->id }}</td>
                        <td>{{ $seller->municipio }}</td>

                        @if ($seller->alc1 <> null)
                        <td style="color: rgb(0, 169, 14)" >{{$seller->puesto}}</td>
                        @else
                            <td style="color: red" >{{$seller->puesto}}</td>

                        @endif


                            @if ($seller->alc1 <> null)
                                <td style="color: rgb(0, 169, 14)" >{{$seller->mesa}}</td>
                            @else
                                <td style="color: red" >{{$seller->mesa}}</td>

                            @endif
                        {{--  <td>{{$seller->cedula}}</td>  --}}


                        <td>
                            @if ($seller->e14 == null)

                            @else
                                <a  target="_blank" rel="noopener noreferrer" href="{{ asset('/storage/' . $seller->e14) }}">Ver E14 cargado</a>
                            @endif

                        </td>
                        <td>
                            @if ($seller->fotorec == null)

                            @else
                                <a  target="_blank" rel="noopener noreferrer" href="{{ asset('/storage/' . $seller->fotorec) }}">Ver Reclamación</a>
                            @endif

                        </td>


                        <td>{{$seller->codescru}}</td>
                        <th>{{$seller->codmun}}{{$seller->codzon}}{{$seller->codpuesto}}</th>






                    </tr>
                    @endforeach

                </tbody>

                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Municipio</th>
                        <th>Puesto</th>
                        <th>Mesa</th>
                        <th>link E14</th>
                        <th>link Reclamación</th>
                        <th>Comisión</th>
                        <th>Codpuesto</th>


                    </tr>

                </tfoot>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
@endsection



@section('js')
    <script> console.log('de tu mano señor!'); </script>
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

            { responsivePriority: 10002, targets: 0 },
            { responsivePriority: 2, targets: 2 },
            { responsivePriority: 1, targets: 3 },
            { target: 6, visible: false},
            { target: 7, visible: false},

            ],
            "dom": 'Bfrtip',
            "buttons": [
                // {
                // "extend": 'excelHtml5',
                // "title": 'testigos_acreditados_xls'
                //  },
                //  {
                // "extend": 'pdfHtml5',
                // "title": 'testigos_acreditados_pdf',
                // "download": 'open'
                //  }
            ]

            }
            );
        })
    </SCript>
@endsection






