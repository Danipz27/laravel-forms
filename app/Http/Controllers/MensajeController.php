<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function store(/*Request $request*/)
        {
            request()->validate([
                'fecha_solicitud'=> 'required',
                'cedula' => 'required',
                'nombre' => 'required|min:3',
                'ubicacion' => 'required',
                'nomina' => 'required',
                'vicepresidencia' => 'required',
                'gerencia' => 'required',
                'departamento' => 'required',
                'motivo' => 'required',
                'supervisor' => 'required',
                'tiempo_inicio' => 'required',
                'tiempo_fin' => 'required',
                'total_dias' => 'required',
                'total_horas' => 'required'
            ]);
            return 'Datos Validados';
        }
}
