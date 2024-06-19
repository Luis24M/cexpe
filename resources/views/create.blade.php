@extends('layouts.layout')

@section('title', 'Agregar Persona')

@section('content')
  <h1>Agregar nueva Persona</h1>
  <form class="flex flex-col w-4/5 mx-auto [&>input]:border [&>input]:w-48 [&>span]:text-red-600" action="{{ route('persona.store') }}" method="post">
    @csrf
    <label for="cPerApellido">Apellido</label>
    <input type="text" name="cPerApellido" id="cPerApellido" >
    <span>
      {{ $errors->first('cPerApellido') }}
    </span>
    <label for="cPerNombre">Nombre</label>
    <input type="text" name="cPerNombre" id="cPerNombre" >
    <span>
      {{ $errors->first('cPerNombre') }}
    </span>
    <label for="cPerDireccion">Dirección</label>
    <input type="text" name="cPerDireccion" id="cPerDireccion" > 
    <span>
      {{ $errors->first('cPerDireccion') }}
    </span>
    <label for="cPerFecNac">Fecha de Nacimiento</label>
    <input type="date" name="cPerFecNac" id="cPerFecNac" > 
    <span>
      {{ $errors->first('cPerFecNac') }}
    </span>
    <label for="nPerEdad">Edad</label>
    <input type="number" name="nPerEdad" id="nPerEdad" >  
    <span>
      {{ $errors->first('nPerEdad') }}
    </span>
    <label for="cPerSexo">Sexo</label>
    <input type="text" name="cPerSexo" id="cPerSexo" >  
    <span>
      {{ $errors->first('cPerSexo') }}
    </span>
    <label for="nPerSueldo">Sueldo</label>
    <input type="number" name="nPerSueldo" id="nPerSueldo" > 
    <span>
      {{ $errors->first('nPerSueldo') }}
    </span>
    <label for="cPerRnd">RND</label>
    <input type="text" name="cPerRnd" id="cPerRnd" > 
    <span>
      {{ $errors->first('cPerRnd') }}
    </span>
    <label for="nPerEstado">Estado</label>
    <input type="number" name="nPerEstado" id="nPerEstado" > 
    <span>
      {{ $errors->first('nPerEstado') }}
    </span>
    <br>
    <input type="submit" value="Guardar">

  </form>
@endsection