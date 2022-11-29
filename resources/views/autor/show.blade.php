@extends('layouts.header')
@section('title', 'AUTOR')

@section('content')

<a href="{{route('autor.index')}}" class="btn btn-secondary"><h3>volver</h3></a>

<div class="card m-5">
    <div class="card-header">
        {{$autor->id}}
    </div>
    <div class="card-body">
        {{$autor->nombres}}
    </div>
     <div class="card-body">
        {{$autor->apellidos}}
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>
<h3>EL AUTOR</h3> <h3>{{$autor->nombres}}</h3>

<h2>TIENE LOS LIBROS</h2>

@foreach ($autor->libros as $registro)
    <h3>{{$registro->nombre}}</h3>
    
@endforeach

@endsection

@extends('layouts.footer')