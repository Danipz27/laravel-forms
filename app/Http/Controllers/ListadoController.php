<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Permisos;

class ListadoController extends Controller
{
    public function index()
    {
        $query = DB::table('registro_permisos')->get();
        return view('Mostrar', ['datos' => $query]);
    }

    public function show(Permisos $ci)
    {
        return view('permisos.show', ['ci'=>$ci]); 
    }
}
