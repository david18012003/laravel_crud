@extends('layouts.plantillaBase');

@section('contenido')
<a href="empleados/create" class="btn btn-primary">Crear</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cedula</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->cedula}}</td>
            <td>{{$empleado->direccion}}</td>
            <td>{{$empleado->telefono}}</td>
            <td>
                <form action="{{route('empleados.destroy',$empleado->id)}}" method="POST">
                <a href="/empleados/{{$empleado->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>

</table>
@endsection