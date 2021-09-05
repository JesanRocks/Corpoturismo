<?php

namespace App\Http\Controllers;

use App\Persona;
use App\User;
use App\Role;
use App\EdoCivil;
use App\Discapacidade;
use App\GradosEducativo;
use App\CondicionesLaborale;
use App\Sectore;
use App\Parroquia;
use App\Municipio;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;//Encriptar

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usuarios = User::orderBy('id','ASC')->get();
        // $personas = Persona::orderBy('id','ASC')->get();
        return view('usuarios.index',compact('usuarios'));
    }

    public function create()
    {
        $roles = Role::orderBy('id','ASC')->get();
        $parroquias = Parroquia::orderBy('id','ASC')->get();
        $edocivils = EdoCivil::orderBy('id','ASC')->get();
        $discapacidades = Discapacidade::orderBy('id','ASC')->get();
        $gradoseduc = GradosEducativo::orderBy('id','ASC')->get();
        $condiciones = CondicionesLaborale::orderBy('id','ASC')->get();
        $sectores = Sectore::orderBy('id','ASC')->get();
        return view('usuarios.create',compact(
            'roles','parroquias','edocivils','discapacidades','gradoseduc','condiciones','sectores'
        ));
    }

    public function store(Request $request)
    {
        
        $validacion = Validator::make($request->all(),
        [
            'nombres'       => 'required',
            'apellidos'     => 'required',
            'cedula'        => 'required|unique:personas,cedula',
            'nacimiento'    => 'required',
            'sexo'          => 'required',
            'parroquia_id'  => 'required',
            'direccion'     => 'required',
        ]);

        if($validacion->fails()) {
            return redirect()->route('usuarios.create')
            ->withErrors($validacion);
        }

        $persona = Persona::create($request->all());

        $request->request->add([
            'password' => Hash::make($request->input('cedula'))
        ]);

        $usuario = User::create([
            'username'      => $persona->cedula,
            'telf_hab'      => $request->input('telf_hab'),
            'telf_cel'      => $request->input('telf_cel'),
            'email'         => $request->input('email'),
            'fecha_ingreso' => $request->input('fecha_ingreso'),
            'fecha_egreso' => $request->input('fecha_egreso'),
            // 'salario'       => $request->input('salario'),
            'password'      => $request->password,  
            'persona_id'    => $persona->id,
            'rol_id'        => $request->input('rol_id')
        ]);

        return redirect()->route('usuarios.index')
            ->with('info','Usuario registrado con exito')
            ->withErrors($validacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return dd(User::find($id));
        $usuario = User::find($id);
        $municipio = Municipio::find($usuario->persona->parroquia->municipio_id);
        return view('usuarios.show', compact('usuario','municipio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $persona = Persona::find($id);
        $usuario = User::where('persona_id', $persona->id)->first();
        $roles = Role::orderBy('id','ASC')->get();
        $edocivils = EdoCivil::orderBy('id','ASC')->get();
        $discapacidades = Discapacidade::orderBy('id','ASC')->get();
        $gradoseduc = GradosEducativo::orderBy('id','ASC')->get();
        $condiciones = CondicionesLaborale::orderBy('id','ASC')->get();
        $sectores = Sectore::orderBy('id','ASC')->get();
        $parroquias = Parroquia::orderBy('id','ASC')->get();
        return view('usuarios.edit', compact('persona','usuario','roles','parroquias','edocivils','discapacidades','gradoseduc','condiciones','sectores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $persona = Persona::find($id);
        $usuario = User::where('persona_id', $persona->id)->first();

        $validacion = request()->validate([            
            'nombres'       => 'required',
            'apellidos'     => 'required',
            'cedula'        => 'required|unique:personas,cedula,'.$persona->id,
            'nacimiento'    => 'required',
            'sexo'          => 'required',
            'parroquia_id'  => 'required',
            'direccion'     => 'required',
        ]);

        $persona->fill(request()->all())->save();

        $request->request->add([
            'password' => Hash::make($request->input('cedula'))
        ]);

        $usuario->username= $request->get('cedula');
        $usuario->telf_hab= $request->get('telf_hab');
        $usuario->telf_cel= $request->get('telf_cel');
        $usuario->email= $request->get('email');
        $usuario->fecha_ingreso= $request->get('fecha_ingreso');
        $usuario->fecha_egreso= $request->get('fecha_egreso');
        // $usuario->salario= $request->get('salario');
        $usuario->password = $request->password;
        $usuario->rol_id = $request->get('rol_id');
        $usuario->save();

        return redirect()->route('usuarios.index')
            ->with('info','Usuario actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id)->delete();
        return back()->with('info','Eliminado correctamente'); 
    }
}
