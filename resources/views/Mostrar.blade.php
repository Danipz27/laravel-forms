@extends('layout')
    
@section('tittle', 'Mis Permisos')
    
@section('content')
<button class="bg-sky-500 hover:bg-sky-700 text-white py-1 px-3 font-semibold rounded-full" onclick="location.href='{{route('volver.inicio')}}'">VOLVER A INTRANET</button>
    <div class="p-5 h-screen bg-gray-100">
        <h1 class="text-xl mb-2">PÁGINA PARA VER MIS PERMISOS</h1>
        <div class="overflow-auto rounded-lg shadow">
            <table class="w-full">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                {{--<th class="p-3 text-sm font-semibold tracking-wide text-left">ID</th>--}}
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Fecha Solicitud</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Cédula</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Nombre</th>
                {{--<th class="p-3 text-sm font-semibold tracking-wide text-left">Ubicación</th>--}}
                {{--<th class="p-3 text-sm font-semibold tracking-wide text-left">Nómina</th>--}}
                {{--<th class="p-3 text-sm font-semibold tracking-wide text-left">Vicepresidencia</th>--}}
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Gerencia</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Departamento</th>
                {{--<th class="p-3 text-sm font-semibold tracking-wide text-left">Motivo</th>--}}
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Supervisor</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Fecha Inicio</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Fecha Fin</th>
                {{--<th class="p-3 text-sm font-semibold tracking-wide text-left">Total Días</th>--}}
                {{--<th class="p-3 text-sm font-semibold tracking-wide text-left">Total Horas</th>--}}
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Status</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">PDF</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300">
                @foreach ($datos as $d)
                <tr class="">
                    {{--<td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{$d->id}}</td>--}}
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->fecha_solicitud}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->cedula}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->nombre}}</td>
                    {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->ubicacion}}</td>--}}
                    {{--<td class="w-10 p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->nomina}}</td>--}}
                    {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->vicepresidencia}}</td>--}}
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->gerencia}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->departamento}}</td>
                    {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->motivo}}</td>--}}
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->supervisor}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->tiempo_inicio}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->tiempo_fin}}</td>
                    {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->total_dias}}</td>--}}
                    {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->total_horas}}</td>--}}
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">
                        
                        <input id="draft" class="peer/draft" type="checkbox" name="status"/>
                        <label for="draft" class="peer-checked/draft:text-sky-500">Negado</label>
                            <input id="published" class="peer/published" type="checkbox" name="status" />
                        <label for="published" class="peer-checked/published:text-sky-500">Aceptado</label>
                        <div class="hidden peer-checked/draft:block bg-red-200 font-semibold rounded-xl text-center">Rechazado.</div>
                        <div class="hidden peer-checked/published:block bg-green-200 font-semibold rounded-xl text-center">Aprobado.</div>
                    </td>
                    <td><a class="font-bold text-blue-500 hover:underline whitespace-nowrap" href="public/Archivos/{{$d->pdf}}" target="blank_">Ver Documento</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
@endsection