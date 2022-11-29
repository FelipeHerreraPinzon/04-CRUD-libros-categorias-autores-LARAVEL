@extends('layouts.header')
@section('title', 'LIBRO')

@section('content')

<a href="{{route('libros.index')}}" class="btn btn-secondary"><h3>volver</h3></a>

<div class="card m-5">
    <div class="card-header">
        {{$libro->id}}
    </div>
    <div class="card-body">
        {{$libro->nombre}}
    </div>
     <div class="card-body">
        {{$libro->categorias->nombre}}
    </div>
    <div class="card-body">
        {{$libro->autores->nombres." ".$libro->autores->apellidos}}
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>



@endsection

@extends('layouts.footer')