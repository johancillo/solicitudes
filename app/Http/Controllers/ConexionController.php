<?php

namespace App\Http\Controllers;

use App\conexion;
use Illuminate\Http\Request;
use App\avanceSolicitud;
use App\Empresa;
use App\Ticket;
use App\User;

class ConexionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$rut_empresa)
    {
         $consulta = conexion::where('rut_empresa', $rut_empresa)->get();
            //dd($tickets);
            return view('conexion.index_conexion', compact('consulta'));
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

    public function mostrar(empresa $empresa)
    {

         return view('conexion.create_conexion', compact('empresa'));
    }

    public function store(Request $request)
    {

           //  $request->merge(['ip' => $_SERVER['REMOTE_ADDR']]);
             $this->validate($request,[
            'rut_empresa'       => 'required',
            'medio_conexion'   => 'required',
            'ip'       => 'required|ip',
            'puerto'   => 'required',
            'usuario'      => 'required',
            'comentario'      => 'required',
    
            ]);
                
            
        conexion::create([

            'rut_empresa' => request('rut_empresa'),
            'medio_conexion' => request('medio_conexion'),
            'ip' => request('ip'),
            'puerto' => request('puerto'),
            'usuario' => request('usuario'),
            'comentario' => request('comentario'),
            
        ]);
        
        return redirect()->route('empresa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function show(conexion $conexion)
    {
          return view('conexion.show_conexion', compact('conexion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function edit(conexion $conexion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, conexion $conexion)
    {

        
          $this->validate($request,[
            'rut_empresa'       => 'required',
            'medio_conexion'    => 'required',
            'ip'   => 'required|ip',
            'puerto'       => 'required',
            'usuario'   => 'required',
            'comentario'      => 'required',
            
                
            ]);
            
        
            $conexion->rut_empresa = request('rut_empresa');
            $conexion->medio_conexion = request('medio_conexion');
            $conexion->ip = request('ip');
            $conexion->puerto = request('puerto');
            $conexion->usuario = request('usuario');
            $conexion->comentario = request('comentario');
            $conexion->save();
    
        return redirect()->route('empresa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function destroy(conexion $conexion)
    {
        //
    }

  
}
