<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    use HasFactory;
    protected $table = 'registro_permisos';
    protected $fillable = ['fecha_solicitud','cedula','nombre','ubicacion','nomina','vicepresidencia','gerencia','departamento','motivo','supervisor','tiempo_inicio','tiempo_fin','total_dias','total_horas','pdf',];
}
