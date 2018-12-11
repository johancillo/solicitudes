<?php

namespace App\Http\Controllers;

use App\formaPago;
use App\factura;
use App\avanceSolicitud;
use App\Empresa;
use App\Ticket;
use App\User;
use Excel;
use Illuminate\Http\Request;



class FormaPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $formapagos = formaPago::latest()->paginate(10);
            //dd($tickets);
            return view('forma-pago.index_formapago', compact('formapagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        
        return view('forma-pago.create_formapago');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $messages = ['Revisar Campo'];
            $this->validate($request,[
            'descripcion'       => 'required|unique:forma_pagos'        
            ],$messages);

        formaPago::create([

            'descripcion' => request('descripcion'),                
        ]);
        
        return redirect()->route('formapago.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\formaPago  $formaPago
     * @return \Illuminate\Http\Response
     */
    public function show(formaPago $formaPago)
    {
        return view('forma-pago.show_formapago', compact('formaPago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\formaPago  $formaPago
     * @return \Illuminate\Http\Response
     */
    public function edit(formaPago $formaPago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\formaPago  $formaPago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formaPago $formaPago)
    {
            $this->validate($request,[
            'descripcion'       => 'required|unique:forma_pagos' 
                
            ]);
                   
            $formaPago->descripcion = request('descripcion');
            
            $formaPago->save();
    
        return redirect()->route('formapago.index')->withSuccess('¡Solicitud Modificada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\formaPago  $formaPago
     * @return \Illuminate\Http\Response
     */
    public function destroy(formaPago $formapago)
    {
        //
    }


    public function delete($cod_forma_pago){

        $formapago = formapago::find($cod_forma_pago);
        $formapago->delete();

        return back()->with('notification', 'Se ha borrado ');

    }

    public function reporte(){

    
    $formapagos = formaPago::all();
    $pdf = \PDF::loadView('forma-pago.index2_formapago', compact('formapagos'));
    return $pdf->download();
    }


   public function reporte2(){

    
    $consulta  = avanceSolicitud::all();
    $pdf = \PDF::loadView('avance_solicitud.indexavance2', compact('consulta'));
    $pdf->setPaper('a4','landscape');
    return $pdf->stream();
    }





    public function reportExcel($type){
    $consulta  = Ticket::select('*')->orderBY('correo_cliente')->get()->toArray();

    return EXCEL::create('avanceSolicitud', function($excel) use ($consulta) {
        $excel->sheet('Avances solicitud', function($sheet) use ($consulta)
        {
            $sheet->fromArray($consulta);
        });

    })->download('xlsx');


    }

// PARA FECHAS MENORES
     public function reportExcelSolicitudTEST(Request $request){

        $fi = $request->input('fecha_solicitud');

    //$consulta  = avanceSolicitud::whereBetween('array($fi, $fe)')->get()->toArray();
    $query = Ticket::where('fecha_solicitud','<=',$fi)->get()->toArray();

    return EXCEL::create('Ticket', function($excel) use ($query) {
        $excel->sheet('tickets', function($sheet) use ($query)
        {
            $sheet->fromArray($query);
        });

    })->download('xlsx');


    }


       public function reportExcelSolicitudFechasCorreo(Request $request){

        $fi = $request->input('fecha_ini');
        $fe = $request->input('fecha_fin');
        $correo = $request->input('correo');


    //$consulta  = avanceSolicitud::whereBetween('array($fi, $fe)')->get()->toArray();
    $query = Ticket::whereBetween('fecha_solicitud',[$fi,$fe])->Where('correo_cliente',$correo)->get()->toArray();

    return EXCEL::create('Reporte Solicitudes'.$fi.$fe, function($excel) use ($query) {
        $excel->sheet('Solicitudes', function($sheet) use ($query)
        {
            $sheet->fromArray($query);
        });

    })->download('xlsx');


    }
        public function reportExcelSolicitudFechas(Request $request){

        $fi = $request->input('fecha_ini');
        $fe = $request->input('fecha_fin');
        
    //$consulta  = avanceSolicitud::whereBetween('array($fi, $fe)')->get()->toArray();
    $query = Ticket::whereBetween('fecha_solicitud',[$fi,$fe])->get()->toArray();

    return EXCEL::create('Reporte Solicitudes'.$fi.$fe, function($excel) use ($query) {
        $excel->sheet('Solicitudes', function($sheet) use ($query)
        {
            $sheet->fromArray($query);
        });

    })->download('xlsx');


    }
}
