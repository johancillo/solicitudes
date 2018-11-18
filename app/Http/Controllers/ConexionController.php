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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function show(conexion $conexion)
    {
        //
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
        //
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
