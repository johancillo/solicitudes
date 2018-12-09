<?php

namespace App\Http\Controllers;
use App\Empresa;
use App\Ticket;
use App\User;
use App\Cliente;
use Illuminate\Http\Request;
use Excel;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	    public function index()
	    {
			$tickets = Ticket::latest()->paginate(10);
			//dd($tickets);
	        return view('tickets.index', compact('tickets'));
	    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$empresas = Empresa::all();
		$clientes = Cliente::all();
		
        return view('tickets.create', compact('empresas'), compact('clientes'));
    }
	
	public function delete(Ticket $ticket){
		
		
		
		return view('tickets.delete', compact('ticket'));
	}

public function reportExcelTickets($type){
    $consulta  = Ticket::select('*')->get()->toArray();

    return EXCEL::create('Solicitudes', function($excel) use ($consulta) {
        $excel->sheet('Solicitudes', function($sheet) use ($consulta)
        {
            $sheet->fromArray($consulta);
        });

    })->download('xlsx');


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd('Store');
		
			$this->validate($request,[
			'rut_empresa' 		=> 'required',
			'correo_cliente' 	=> 'required',
			'horas_estimadas' 	=> 'required',
			'descripcion' 		=> 'required',
			'fecha_solicitud' 	=> 'required',
			'fecha_inicio' 		=> 'required',
			'fecha_fin_estimada'=> 'required',
			'estado' 			=> 'required',
			'tipo' 				=> 'required'
				
			
				
			]);
		
		Ticket::create([
			'rut_empresa' => request('rut_empresa'),
			'correo_cliente' => request('correo_cliente'),
			'horas_estimadas' => request('horas_estimadas'),
			'descripcion' => request('descripcion'),
			'fecha_solicitud' => request('fecha_solicitud'),
			'fecha_inicio' => request('fecha_inicio'),
			'fecha_fin_estimada' => request('fecha_fin_estimada'),
			'estado' => request('estado'),
			'tipo' => request('tipo'),
			
		]);

	
		
		return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
    	
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
		
			$this->validate($request,[
			'rut_empresa' 		=> 'required',
			'correo_cliente' 	=> 'required',
			'horas_estimadas' 	=> 'required',
			'descripcion' 		=> 'required',
			'fecha_solicitud' 	=> 'required',
			'fecha_inicio' 		=> 'required',
			'fecha_fin_estimada'=> 'required',
			'estado' 			=> 'required',
			'tipo' 				=> 'required'
				
			]);
			
        
			$ticket->rut_empresa = request('rut_empresa');
			$ticket->correo_cliente = request('correo_cliente');
			$ticket->horas_estimadas = request('horas_estimadas');
			$ticket->descripcion = request('descripcion');
			$ticket->fecha_solicitud = request('fecha_solicitud');
			$ticket->fecha_inicio = request('fecha_inicio');
			$ticket->fecha_fin_estimada = request('fecha_fin_estimada');
			$ticket->estado = request('estado');
			$ticket->tipo = request('tipo');
		    $ticket->save();
	
		return redirect()->route('tickets.index')->withSuccess('¡Solicitud Modificada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
		//dd($ticket);
        $ticket->delete();
		
		return redirect()->route('tickets.index')->withError('¡Solicitud Eliminada!');
    }

    
    
        public function holamundo()
	    {
			$tickets = Ticket::latest()->paginate(10);
			//dd($tickets);
	        return view('tickets.index', compact('tickets'));
	    }

}
