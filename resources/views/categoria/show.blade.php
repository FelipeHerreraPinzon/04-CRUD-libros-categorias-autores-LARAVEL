@extends('layouts.header')
@section('title', 'CATEGORIA')

@section('content')

<a href="{{route('categorias.index')}}" class="btn btn-secondary"><h3>volver</h3></a>

<div class="card m-5">
    <div class="card-header">
        {{$categoria->id}}
    </div>
    <div class="card-body">
        {{$categoria->nombre}}
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>

<h3>LA CATEGORIA</h3> <h3>{{$categoria->nombre}}</h3>

<h2>TIENE LOS LIBROS</h2>

@foreach ($categoria->libros as $registro)
    <h3>{{$registro->nombre}}</h3>
    
@endforeach


@endsection

@extends('layouts.footer')