<?php

namespace App\Http\Controllers;

use App\Solicitude;
use App\Documento;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class SolicitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Solicitude::orderBy('id','ASC')->get()->where('usuario_id', Auth::user()->id);
        return view('solicitudes.index',compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documentos = Documento::orderBy('id','ASC')->get();
        return view('solicitudes.create',compact('documentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacion = Validator::make($request->all(),
        [
            'documento'  => 'required|integer',
        ]);

        if($validacion->fails()) {
            return redirect()->route('solicitud.create')
            ->withErrors($validacion);
        }

        $obtener = Solicitude::orderBy('id','ASC')->get('id')->last();
       
        if ($obtener == NULL) {
             $codigoID = 1;
        }else{
            $codigoID = $obtener->id+1;
        }

        $documentos = Solicitude::create([
            'cod'   => "CP".Auth::user()->username."-".$codigoID."-0".$request->input('documento'),
            'documento_id'      => $request->input('documento'),
            'usuario_id'        => Auth::user()->id,
            'estatus_id'        => '1',
            'periodo'           => $request->input('periodo'),
            'fecha_inicio'      => $request->input('fecha_inicio'),            
            'fecha_final'       => $request->input('fecha_final'),
            'razon'   => "En espera...",
        ]); 

        return redirect()->route('solicitud.index')
            ->with('info','Solicitud procesada con exito')
            ->withErrors($validacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solicitude  $solicitude
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitude $solicitude)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solicitude  $solicitude
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitude $solicitude)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitude  $solicitude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitude $solicitude)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solicitude  $solicitude
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitude $solicitude)
    {
        //
    }
}
