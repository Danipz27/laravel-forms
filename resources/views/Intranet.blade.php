@extends('layout')

@section('tittle', 'Intranet')

@section('content')
    <div class="mx-auto w3/6">
        <h1 class="text-2xl font-bold text-center underline">Este es el Intranet</h1><br>
        <input type ="button" class="bg-sky-500 hover:bg-sky-700 text-white py-1 px-3 font-semibold rounded-full" value ="VOLVER A LOS PERMISOS" onclick="location.href='{{route('volver.permiso')}}'"/>
        <input type ="button" class="bg-sky-500 hover:bg-sky-700 text-white py-1 px-3 font-semibold rounded-full" value ="VER MIS PERMISOS" onclick="location.href='{{route('index.listado')}}'"/>
    </div>
@endsection

