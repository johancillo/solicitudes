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
    public function index(Request $request,$id)
    {


        $consulta = avanceSolicitud::where('id_solicitud', $id)->get();
            //dd($tickets);
            return view('avance_solicitud.indexavance', compact('consulta'));
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


            $this->validate($request,[
            'id_solicitud'       => 'required',
            'rut_usuario'   => 'required',
            'horas_netas'       => 'required',
            'tipo_hora'   => 'required',
            'detalle_avance'      => 'required',
    
            ]);
                
        avanceSolicitud::create([

            'id_solicitud' => request('id_solicitud'),
            'fecha_reg_avance' => request('fecha_reg_avance'),
            'rut_usuario' => request('rut_usuario'),
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
         
         return view('avance_solicitud.actualizaravance', compact('avanceSolicitud'));
    }


    public function mostrar(Ticket $ticket)
    {

         return view('avance_solicitud.showavance', compact('ticket'));
    }

    public function porId(Ticket $tickets)
    {
    /*$ticket = DB::table('Ticket')
                ->where('id', '=', $tickets)
                ->get();

         return view('avance_solicitud.consultaavance', compact('ticket'));*/

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

            $this->validate($request,[
            'rut_usuario'   =>'required',
            'horas_netas'       => 'required',
            'tipo_hora'    => 'required',
            'detalle_avance'   => 'required',
            'fecha_avance'       => 'required',
                
            ]);

       
            $avanceSolicitud->rut_usuario = request('rut_usuario');  
            $avanceSolicitud->horas_netas = request('horas_netas');
            $avanceSolicitud->tipo_hora = request('tipo_hora');
            $avanceSolicitud->detalle_avance = request('detalle_avance');
            $avanceSolicitud->fecha_avance = request('fecha_avance');
            $avanceSolicitud->save();

            return redirect()->route('tickets.index');

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
