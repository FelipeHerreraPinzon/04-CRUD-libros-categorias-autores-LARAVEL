@extends('layouts.header')
@section('title', 'EDITAR CATEGORIA')

@section('content')
<form method="POST" action="{{route('categorias.update', $categoria)}}" enctype="multipart/form-data">
@csrf
@method('put')    

<input class="form-control" type="text" name="nombre" value="{{$categoria->nombre}}">
<br>

<input type="submit" name="enviar" value="ACTUALIZAR" class="btn btn-success">

</form>

@endsection

@extends('layouts.footer')