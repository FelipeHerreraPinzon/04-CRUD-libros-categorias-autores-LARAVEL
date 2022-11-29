@extends('layouts.header')

@section('title', 'CATEGORIAS')



@section('content')

<a href="{{route('categorias.create')}}" class="btn btn-success mt-3">CREAR CATEGORIA</a>

<div class="table-responsive m-5">
    <table class="table table-primary table-striped" id="tabla_1">
        <thead class="table table-danger ">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">VER</th>
                <th scope="col">EDITAR</th>
                <th scope="col">BORRAR</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nombre}}</td>
            <td><a href="{{route('categorias.show', $categoria)}}" class="btn btn-info">Ver</a></td> 
            <td><a href="{{route('categorias.edit', $categoria)}}" class="btn btn-warning">Editar</a></td>
            <td>
                <form action="{{route('categorias.destroy', $categoria)}}" method="POST">
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