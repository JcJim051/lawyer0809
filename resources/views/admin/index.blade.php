@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<style>
    #centrador{
  position: relative;
  width: auto;
  height: 400px;

    }

    #imagen{
        position: absolute;
        width: 100px;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
}
</style>
    <h2>Aplicacion de Caracterizacion de abogados</h2>
@stop

@section('content')
        @if (session('info'))
        <div class="alert alert-success">
            <strong>{{(session('info'))}}</strong>
        </div>
        @endif 
        
            <div class="col-md-12">
                <div id="centrador">
             <img id="imagen" class="img-responsive" style="width:300px" src="public/img/imagencampaña.jpeg" alt="">
            </div>
            
        </div>
@stop

