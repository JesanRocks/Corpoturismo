<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cargos = Role::orderBy('id','ASC')->get();
        return view('cargos.index',compact('cargos'));
    }

    public function create()
    {
        return view('cargos.create');
    }

    public function store(Request $request)
    {
        $validacion = Validator::make($request->all(),
        [
            'dsc'           => 'required',
            'sueldo'        => 'required',
            'sueldoEscrito' => 'required|min:9'
        ]);

        if($validacion->fails()) {
            return redirect()->route('cargos.create')
            ->withErrors($validacion);
        }

        $cargo = Role::create($request->all());
        return redirect()->route('cargos.index',compact('cargo'))
            ->with('info','Cargo registrado con exito')
            ->withErrors($validacion);
    }

    public function show($id)
    {
        $cargo = Role::find($id);
        return view('cargos.show', compact('cargo'));
    }

    public function edit($id)
    {
        $cargo = Role::find($id);
        return view('cargos.edit', compact('cargo'));
    }

    public function update(Request $request,$id)
    {
        $cargo = Role::find($id);
        
        $validacion = request()->validate([            
            'dsc'           => 'required',
            'sueldo'        => 'required',
            'sueldoEscrito' => 'required|min:9'
        ]);

        $cargo->fill(request()->all())->save();

        return redirect()->route('cargos.index')
            ->with('info','Cargo actualizado con exito');
    }

    public function destroy($id)
    {
        $cargo = Role::find($id)->delete();
        return back()->with('info','Eliminado correctamente'); 
    }
}
