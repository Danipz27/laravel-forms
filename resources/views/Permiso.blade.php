@extends('layout')
    
@section('tittle', 'Permisos')

@section('content')
    <div class="min-h-screen py-6">
        <h1 class="text-2xl font-bold text-center">FORMATO DE SOLICITUD Y AUTORIZACIÓN DE PERMISOS</h1><br>
        <div class="container w-full mx-auto">    
            <div class=" flex flex-col lg:flex-row w-11/12 mx-auto bg-white rounded-xl drop-shadow-xl">
                <div class="w-2/5 flex flex-col text-black items-center bg-violet-300 rounded-xl justify-top bg-no-repeat bg-center pt-20 bg-clip" style="background-image: url('img/CVG_Corporacion_Venezolana_de_Guayana-logo-3A049A7049-seeklogo.com.png');">
                    <h1 class="text-3xl font-bold">BUEN DÍA!!</h1>
                    <h1 class="text-3xl text-center py-7 font-semibold"> Le desea Corporación Venezolana de Guayana</h1>
                    <div>
                        <p class="mx-8 mt-0 justify text-center">Est dolor nihil et repudiandae voluptates nam accusamus libero cum quam voluptatem eos voluptatem architecto et adipisci excepturi quo minima facere. Sed aliquam autem ea voluptatibus magni qui internos dignissimos ad dolorum fuga aut cupiditate pariatur? Quo excepturi corporis qui nemo quisquam ut repellat quis est.</p>
                    </div>
                </div>
                <form class="w-10/12" method="POST" action="{{route('create.permiso')}}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="w-full px-10 pt-10 pb-6">
                            <fieldset>
                                <legend>
                                    <h2 class="font-bold">POR FAVOR</h2>
                                    <h2 class="font-semibold">Complete el formulario y haga click en el Botón de Imprimir</h2><br>    
                                </legend>
                            </fieldset>
                            <div class="shadow-md w-full">
                                <label class="block">
                                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                        Fecha de la Solicitud
                                    </span>
                                    <input type="date" required name="fecha_solicitud" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Fecha de la Solicitud" />
                                </label>
                            
                            </div><br>
                                    <h3 class="text-center font-semibold">DATOS DEL SOLICITANTE</h3>
                                    <div class="shadow-md w-full">
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="px-2 py-2">
                                                <label class="block">
                                                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                        Cédula de Identidad
                                                    </span>
                                                    <input type="number" required name="cedula" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Cédula" />
                                                    <input type="nombre" required name="nombre" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Nombre" />
                                                </label>
                                            
                                            </div>
                                            <div class="px-2 py-2">
                                                <label class="block">
                                                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                        Ubicación Geográfica
                                                    </span>
                                                    <input type="text" required name="ubicacion" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Ubicación" />
                                                </label>
                                            
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-3" >
                                            <div class="px-2 py-2"> 
                                                <label class="block">
                                                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                        Nómina
                                                    </span>
                                                    <input type="number" required name="nomina" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Nómina" />
                                                </label>
                                            
                                            </div>
                                            <div class="px-2 py-2">
                                                <label class="block">
                                                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                        Vicepresidencia o Gerencia General
                                                    </span>
                                                    <input type="text" required name="vicepresidencia" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Vicepresidencia" />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-3" >
                                            <div class="px-2 py-2">
                                                <label class="block">
                                                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                        Gerencia
                                                    </span>
                                                    <input type="text" required name="gerencia" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Gerencia" />
                                                </label>
                                            
                                            </div>
                                            <div class="px-2 py-2">
                                                <label class="block">
                                                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                        Departamento
                                                    </span>
                                                    <input type="text" required name="departamento" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Departamento" />
                                                </label>
                                            
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-3" >
                                            <div class="px-2 py-2">
                                                <label class="block">
                                                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                        Motivo
                                                    </span>
                                                    <textarea required name="motivo" rows="4" class="mb-2 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Motivo"></textarea>
                                                </label>
                                            
                                            </div>
                                            <div class="px-2 py-2">
                                                <label class="block">
                                                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                        Supervisor Inmediato
                                                    </span>
                                                    <input type="text" required name="supervisor" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Supervisor" />
                                                </label>
                                            </div>
                                        </div>
                                    </div><br>
                                    <h3 class="text-center font-semibold">DURACIÓN DEL PERMISO</h3>
                                    <div class="grid grid-cols-2 gap-3 shadow-md" >
                                        <div class="px-2 py-2">
                                            <label class="block">
                                                <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                    Fecha Inicio
                                                </span>
                                                <input type="date" required name="tiempo_inicio" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Desde" />
                                            </label>
                                            <label class="block">
                                                <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                    Fecha Fin
                                                </span>
                                                <input type="date" required name="tiempo_fin" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Hasta" />
                                            </label>
                                        </div>
                                        <div class="px-2 py-2">
                                            <label class="block">
                                                <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                    Total Días
                                                </span>
                                                <input type="number" required name="total_dias" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Nro de Días" />
                                            </label>
                                            <label class="block">
                                                <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                    Total Horas
                                                </span>
                                                <input type="number" required name="total_horas" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Nro de Horas" />
                                            </label>
                                            <br> 
                                        </div>
                                    </div><br>
                                    <h3 class="text-center font-semibold">COMPLEMENTO</h3>
                                    <div class="px-2 py-2 shadow-md">
                                        <label class="block">
                                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                                Montar PDF
                                            </span>
                                            <input type="file" required name="pdf" class="mb-2 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Cargar PDF" />
                                        </label>
                                    </div>
                            </div>
                    </div>
                    <div class="px-20 pt-2 pb-6 grid grid-cols-2 gap-3 shadow-md" >
                        <div class="px-2 py-2">
                            <input type="submit" value="ALMACENAR" class="bg-sky-500 hover:bg-sky-700 text-white py-1 px-3 font-semibold rounded-full"/>
                            <input type ="button" class="bg-sky-500 hover:bg-sky-700 text-white py-1 px-3 font-semibold rounded-full" value ="IMPRIMIR" onclick="window.print();"/>
                        </div>
                        <div class="px-2 py-2">
                            <input type="reset" value="LIMPIAR" class="bg-sky-500 hover:bg-sky-700 text-white py-1 px-3 font-semibold rounded-full"/>
                            <input type ="button" class="bg-sky-500 hover:bg-sky-700 text-white py-1 px-3 font-semibold rounded-full" value ="VOLVER A LA INTRANET" onclick="location.href='{{route('volver.inicio')}}'"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
@endsection