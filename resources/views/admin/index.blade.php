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
                
            </div>
        </div>

@stop

