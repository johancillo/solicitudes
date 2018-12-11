<?php

namespace App\Http\Controllers;

use App\factura;
use App\avanceSolicitud;
use App\Empresa;
use App\Ticket;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::latest()->where('is_admin','<>','1')->paginate(10);
            //dd($tickets);
            return view('usuarios.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registro(){

        return view('auth.register');

    }


    public function create()
    {
          $tickets = Ticket::all();
          return view('factura.create_factura', compact('tickets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$messages= ['num_factura.required'=>'Ya existe esta factura','id.required'=>'Ingresa ID'];
        
        $messages = ['YA EXISTE ESA FACTURA'];
            $this->validate($request,[
            'num_factura'       => 'required|unique:facturas',
            'id'    => 'required',
            'monto'       => 'required',
            'orden_compra'   => 'required',
            'fecha_facturacion'      => 'required',
            'fecha_primer_pago'      => 'required',
            'cantidad_cuotas'      => 'required',
            ],$messages);

        Factura::create([

            'num_factura' => request('num_factura'),
             'id' =>request('id'),
            'monto' => request('monto'),
            'orden_compra' => request('orden_compra'),
            'fecha_facturacion' => request('fecha_facturacion'),
            'fecha_primer_pago' => request('fecha_primer_pago'),
            'cantidad_cuotas' => request('cantidad_cuotas')        
            
        ]);
        
        return redirect()->route('facturas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(factura $factura)
    {
         return view('factura.show_factura', compact('factura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, factura $factura)
    {
        

            $this->validate($request,[
            'num_factura'       => 'required',
            'id'    => 'required',
            'monto'       => 'required',
            'orden_compra'   => 'required',
            'fecha_facturacion'      => 'required',
            'fecha_primer_pago'      => 'required',
            'cantidad_cuotas'      => 'required',
            
                
            ]);
            
        
            $factura->num_factura = request('num_factura');
            $factura->id = request('id');
            $factura->monto = request('monto');
            $factura->orden_compra = request('orden_compra');
            $factura->fecha_facturacion = request('fecha_facturacion');
            $factura->fecha_primer_pago = request('fecha_primer_pago');
            $factura->cantidad_cuotas = request('cantidad_cuotas');
            $factura->save();
    
        return redirect()->route('facturas.index')->withSuccess('¡Datos han Modificados!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(factura $factura)
    {
        //
    }
}
