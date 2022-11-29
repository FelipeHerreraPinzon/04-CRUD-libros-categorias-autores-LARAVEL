@extends('layouts.header')

@section('title', 'AUTORES')



@section('content')

<a href="{{route('autor.create')}}" class="btn btn-success mt-3">CREAR AUTOR</a>

<div class="table-responsive m-5">
    <table class="table table-primary table-striped" id="tabla_1">
        <thead class="table table-danger ">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRES</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">VER</th>
                <th scope="col">EDITAR</th>
                <th scope="col">BORRAR</th>
            </tr>
        </thead>
        <tbody>
        @foreach($autores as $autor)
            <tr>
                <td>{{$autor->id}}</td>
                <td>{{$autor->nombres}}</td>
                <td>{{$autor->apellidos}}</td>
            <td><a href="{{route('autor.show', $autor)}}" class="btn btn-info">Ver</a></td> 
            <td><a href="{{route('autor.edit', $autor)}}" class="btn btn-warning">Editar</a></td>
            <td>
                <form action="{{route('autor.destroy', $autor)}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="eliminar" class="btn btn-danger">
                </form>
            </td>    
               
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>

<script>

var myTable = document.querySelector("#tabla_1");
var dataTable = new DataTable(myTable);

</script>


@endsection


@extends('layouts.footer')