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
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Nómina</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Vicepresidencia</th>
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
                <tr class="">
                    {{--<td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{$ci->id}}</td>--}}
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->fecha_solicitud}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->cedula}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->nombre}}</td>
                    {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->ubicacion}}</td>--}}
                    <td class="w-10 p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->nomina}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->vicepresidencia}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->gerencia}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->departamento}}</td>
                    {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->motivo}}</td>--}}
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->supervisor}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->tiempo_inicio}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->tiempo_fin}}</td>
                    {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->total_dias}}</td>--}}
                    {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$ci->total_horas}}</td>--}}
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">
                        
                        <input id="draft" class="peer/draft" type="checkbox" name="status"/>
                        <label for="draft" class="peer-checked/draft:text-sky-500">Negado</label>
                            <input id="published" class="peer/published" type="checkbox" name="status" />
                        <label for="published" class="peer-checked/published:text-sky-500">Aceptado</label>
                        <div class="hidden peer-checked/draft:block bg-red-200 font-semibold rounded-xl text-center">Rechazado.</div>
                        <div class="hidden peer-checked/published:block bg-green-200 font-semibold rounded-xl text-center">Aprobado.</div>
                    </td>
                    <td><a class="font-bold text-blue-500 hover:underline whitespace-nowrap" href="public/Archivos/{{$ci->pdf}}" target="blank_">Ver Documento</a></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
@endsection