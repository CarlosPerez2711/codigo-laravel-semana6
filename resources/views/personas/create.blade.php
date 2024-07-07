@extends('layout')

@section('title', 'Crear Persona')

@section('content')
    <h1>Crear Persona</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/persona/store') }}" method="POST">
        @csrf
        <div>
            <label for="cperApellido">Apellido:</label>
            <input type="text" id="cperApellido" name="cperApellido" value="{{ old('cperApellido') }}">
        </div>
        <div>
            <label for="cPerNombre">Nombre:</label>
            <input type="text" id="cPerNombre" name="cPerNombre" value="{{ old('cPerNombre') }}">
        </div>
        <div>
            <label for="cPerDireccion">Dirección:</label>
            <input type="text" id="cPerDireccion" name="cPerDireccion" value="{{ old('cPerDireccion') }}">
        </div>
        <div>
            <label for="dPerFechaNac">Fecha de Nacimiento:</label>
            <input type="date" id="dPerFechaNac" name="dPerFechaNac" value="{{ old('dPerFechaNac') }}">
        </div>
        <div>
            <label for="nPerEdad">Edad:</label>
            <input type="number" id="nPerEdad" name="nPerEdad" value="{{ old('nPerEdad') }}">
        </div>
        <div>
            <label for="nPerSueldo">Sueldo:</label>
            <input type="number" id="nPerSueldo" name="nPerSueldo" step="0.01" value="{{ old('nPerSueldo') }}">
        </div>
        <div>
            <label for="nPerEstado">Estado:</label>
            <select id="nPerEstado" name="nPerEstado">
                <option value="1" {{ old('nPerEstado') == '1' ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ old('nPerEstado') == '0' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
        <div>
            <button type="submit">Crear</button>
        </div>
    </form>
@endsection


