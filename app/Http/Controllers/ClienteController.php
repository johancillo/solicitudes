<?php

namespace App\Http\Controllers;

use App\Cliente;

use App\Pago;
use App\formaPago;
use App\factura;
use App\avanceSolicitud;
use App\Empresa;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Excel;

use Illuminate\Notifications\Notifiable;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $clientes = Cliente::latest()->paginate(10);
            //dd($tickets);
            return view('clientes.index_cliente', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function mostrar_por_solicitud(Request $request,$correo)
    {
            $tickets = Ticket::where('correo_cliente',$correo)->orderBy('id', 'desc')->get();
            //dd($tickets);
            return view('clientes.index_cliente_ticket', compact('tickets'));
    }


    public function reportExcelCliente(Request $request,$correo){

      $tickets = Ticket::where('correo_cliente',$correo)->orderBy('id', 'desc')->get()->toArray();

    return EXCEL::create('ticket', function($excel) use ($tickets) {
        $excel->sheet('ticket', function($sheet) use ($tickets)
        {
            $sheet->fromArray($tickets);
        });

    })->download('xlsx');


    }


    public function create()
    {
         return view('clientes.create_cliente');
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
            'correo_cliente'       => 'required|unique:clientes',
            'nombre'    => 'required',
            'telefono'   => 'required',
            'telefono_alt'       => 'required',
            'correo_alt'   => 'required',
            'cod_area'      => 'required',     
                
            ]);
        
        Cliente::create([
            'correo_cliente' => request('correo_cliente'),
            'nombre' => request('nombre'),
            'telefono' => request('telefono'),
            'telefono_alt' => request('telefono_alt'),
            'correo_alt' => request('correo_alt'),
            'cod_area' => request('cod_area'),
            
        ],'Ya existe ese correo');
        
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
       return view('clientes.show_cliente', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
            $this->validate($request,[
            'correo_cliente'       => 'required',
            'nombre'    => 'required',
            'telefono'   => 'required',
            'telefono_alt'       => 'required',
            'correo_alt'   => 'required',
            'cod_area'      => 'required',
            
                
            ]);
            
        
            $cliente->correo_cliente = request('correo_cliente');
            $cliente->nombre = request('nombre');
            $cliente->telefono = request('telefono');
            $cliente->telefono_alt = request('telefono_alt');
            $cliente->correo_alt = request('correo_alt');
            $cliente->cod_area = request('cod_area');
            $cliente->save();
    
        return redirect()->route('clientes.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }

    public function delete($id){

        $cliente = Cliente::find($id);
        $cliente->delete();

        return back()->with('notification', 'Se ha borrado ');

    }
}
