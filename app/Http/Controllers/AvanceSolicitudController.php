<?php

namespace App\Http\Controllers;

use App\avanceSolicitud;
use App\Empresa;
use App\Ticket;
use App\User;

use Illuminate\Http\Request;

class AvanceSolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $users = User::all();
        
         return view('ticket.index',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                
        avanceSolicitud::create([

            'id_solicitud' => request('id_solicitud'),
            'rut_usuario' => request('rut_usuario'),
            'fecha_reg_avance' => request('fecha_reg_avance'),
           
            'horas_netas' => request('horas_netas'),
            'tipo_hora' => request('tipo_hora'),
            'detalle_avance' => request('detalle_avance'),
            'fecha_avance' => request('fecha_avance'),
            
        ]);
        
        return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\avanceSolicitud  $avanceSolicitud
     * @return \Illuminate\Http\Response
     */
    public function show(avanceSolicitud $avanceSolicitud)
    {
         return view('avance_solicitud.showavance', compact('avanceSolicitud'));
    }

    public function mostrar(Ticket $ticket)
    {

         return view('avance_solicitud.showavance', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\avanceSolicitud  $avanceSolicitud
     * @return \Illuminate\Http\Response
     */
    public function edit(avanceSolicitud $avanceSolicitud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\avanceSolicitud  $avanceSolicitud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, avanceSolicitud $avanceSolicitud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\avanceSolicitud  $avanceSolicitud
     * @return \Illuminate\Http\Response
     */
    public function destroy(avanceSolicitud $avanceSolicitud)
    {
        //
    }
}
