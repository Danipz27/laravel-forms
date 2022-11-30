<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permisos;
use DB;

class PermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Permiso');
    }

    public function ver_permisos()
    {
        //$permisos = Permisos::all();
        //return $permisos;
        //return permisos::all();
    }

    public function intranet()
    {
        return view('Intranet');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        try {
            DB::beginTransaction();
                $reg= new Permisos;
                $reg->fecha_solicitud = $request->get('fecha_solicitud');
                $reg->cedula = $request->get('cedula');
                $reg->nombre = $request->get('nombre');
                $reg->ubicacion = $request->get('ubicacion');
                $reg->nomina = $request->get('nomina');
                $reg->vicepresidencia = $request->get('vicepresidencia');
                $reg->gerencia = $request->get('gerencia');
                $reg->departamento = $request->get('departamento');
                $reg->motivo = $request->get('motivo');
                $reg->supervisor = $request->get('supervisor');
                $reg->tiempo_inicio = $request->get('tiempo_inicio');
                $reg->tiempo_fin = $request->get('tiempo_fin');
                $reg->total_dias = $request->get('total_dias');
                $reg->total_horas = $request->get('total_horas');
                /*if($request->hasFile('pdf')){
                $archivo = $request->file('cargar_pdf');
                $destino = base_path('/Archivos/');
                $archivo->move($destino, $archivo->getClientOriginalName());
                $reg->pdf = $archivo->getClientOriginalName();*/
                if ($request->hasFile('pdf')) {
                    $image = $request->file('pdf');
                   //  print_r($image);
                    //$image_name = time().'.'.$image->getClientOriginalName();
                   //  echo $image;
                   //  exit(0);
                    //$destinationPath = base_path('public\Archivos');
                    $image->move(public_path().'/Archivos/', $image->getClientOriginalName());
                    $reg->pdf = $image->getClientOriginalName();
                }
                $reg->save();
                DB::commit();
            } catch (Exception $e) {
            DB::rollback();
        }
        return redirect()->route('volver.permiso');

        /*Permisos::create([
            'fecha_solicitud' => request('fecha_solicitud'),
            'cedula' => request('cedula'),
            'nombre' => request('nombre'),
            'ubicacion' => request('ubicacion'),
            'nomina' => request('nomina'),
            'vicepresidencia' => request('vicepresidencia'),
            'gerencia' => request('gerencia'),
            'departamento' => request('departamento'),
            'motivo' => request('motivo'),
            'supervisor' => request('supervisor'),
            'tiempo_inicio' => request('tiempo_inicio'),
            'tiempo_fin' => request('tiempo_fin'),
            'total_dias' => request('total_dias'),
            'total_horas' => request('total_horas')
        ]);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){  
        $data = User::FindOrFail($id);  
        if(file_exists('backend_assets/uploads/userPhoto/'.$data->photo) AND !empty($data->photo)){ 
            unlink('backend_assets/uploads/userPhoto/'.$data->photo);
        } 
            try{
                $data->delete();
                $bug = 0;
            }
            catch(\Exception $e){
                $bug = $e->errorInfo[1];
            } 
            if($bug==0){
                echo "success";
            }else{
                echo 'error';
            }
        }
}
