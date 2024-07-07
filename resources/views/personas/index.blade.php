@extends('layout')

@section('content')
    <h2>Lista de Personas</h2>
    <a href="{{ route('personas.create') }}">Crear Nueva Persona</a>
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <table>
        <tr>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Fecha de Nacimiento</th>
            <th>Edad</th>
            <th>Sueldo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        @foreach ($personas as $persona)
            <tr>
                <td>{{ $persona->cperApellido }}</td>
                <td>{{ $persona->cperNombre }}</td>
                <td>{{ $persona->cPerDireccion }}</td>
                <td>{{ $persona->dPerFechaNac }}</td>
                <td>{{ $persona->nPerEdad }}</td>
                <td>{{ $persona->nPerSueldo }}</td>
                <td>{{ $persona->nPerEstado ? 'Activo' : 'Inactivo' }}</td>
                <td>
                    <a href="{{ route('personas.show', $persona->id) }}">Mostrar</a>
                    <a href="{{ route('personas.edit', $persona->id) }}">Editar</a>
                    <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
