@extends('layouts.header')
@section('title', 'EDITAR AUTOR')

@section('content')
<form method="POST" action="{{route('autor.update', $autor)}}" enctype="multipart/form-data">
@csrf
@method('put')    

<input class="form-control" type="text" name="nombres" value="{{$autor->nombres}}">
<br>
<input class="form-control" type="text" name="apellidos" value="{{$autor->apellidos}}">
<br>
<input type="submit" name="enviar" value="ACTUALIZAR" class="btn btn-success">

</form>

@endsection

@extends('layouts.footer')