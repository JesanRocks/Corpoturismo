<?php

namespace App\Http\Controllers;

use App\Solicitude;
use App\Documento;
use App\Estatu;

use Illuminate\Http\Request;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Solicitude::orderBy('id','ASC')->get()->where('estatus_id',1);
        return view('tramites.index',compact('solicitudes'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitud = Solicitude::find($id);
        $documentos = Documento::orderBy('id','ASC')->get();
        $estatus = Estatu::orderBy('id','ASC')->get();
        return view('tramites.edit', compact('solicitud','documentos','estatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $solicitud = Solicitude::find($id);
        
        $validacion = request()->validate([            
            'estatus_id'    => 'required',
            'razon'         => 'required|min:3',
        ]);

        $solicitud->fill(request()->all())->save();

        return redirect()->route('tramites.index')
            ->with('info','Solicitud revisada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
