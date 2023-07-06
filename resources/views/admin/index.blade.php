@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h2>Aplicacion de Caracterizacion de abogados</h2>
@stop

@section('content')
        @if (session('info'))
        <div class="alert alert-success">
            <strong>{{(session('info'))}}</strong>
        </div>
        @endif

       
@stop

