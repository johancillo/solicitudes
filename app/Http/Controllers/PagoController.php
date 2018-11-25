<?php

namespace App\Http\Controllers;

use App\Pago;
use App\factura;
use App\avanceSolicitud;
use App\Empresa;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$num_factura)
    {
         $consulta =  Pago::where('num_factura', $num_factura)->get();
            //dd($tickets);
          $consulta2 =  factura::where('num_factura', $num_factura)->get();
            //dd($tickets);
            return view('pago.index_pago', compact('consulta'), compact('consulta2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$num_factura)
    {
         $consulta = factura::where('num_factura', $num_factura)->first();
          return view('pago.create_pago', compact('consulta'));
    }



       public function mostrar(factura $factura)
    {

      //   return view('conexion.create_conexion', compact('factura'));
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
            'num_factura'       => 'required',
            'fecha_pago'   => 'required',
            'cod_forma_pago'       => 'required',
            'monto'   => 'required',

    
            ]);
                
        pago::create([

            'num_factura' => request('num_factura'),
            'fecha_pago' => request('fecha_pago'),
            'cod_forma_pago' => request('cod_forma_pago'),
            'monto' => request('monto'),
           
        ]);
        
        return redirect()->route('facturas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Pago $pago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pago $pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pago $pago)
    {
        //
    }
}
