<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Ticket;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::latest()->paginate(10);
		//dd($tickets);
        return view('empresa.indexemp', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.createemp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

             $messages = ['rut_empresa.required'=>'Ya existe esta Empresa'];
            $this->validate($request,[
            'rut_empresa'       => 'required|unique:empresas',
            'razon_social'    => 'required',
            'nombre_empresa'   => 'required',
            'telefono'       => 'required',
            'direccion'   => 'required',
            'giro'      => 'required',
            ],$messages);


        	Empresa::create([
			'rut_empresa' => request('rut_empresa'),
			'razon_social' => request('razon_social'),
			'nombre_empresa' => request('nombre_empresa'),
			'telefono' => request('telefono'),
			'direccion' => request('direccion'),
			'giro' => request('giro'),
			
		
			
		]);
		
		return redirect()->route('empresa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
         return view('empresa.showemp', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $this->validate($request,[
            'rut_empresa'       => 'required|unique:empresas',
            'razon_social'    => 'required',
            'nombre_empresa'   => 'required',
            'telefono'       => 'required',
            'direccion'   => 'required',
            'giro'      => 'required',
            
                
            ]);
            
        
            $empresa->rut_empresa = request('rut_empresa');
            $empresa->razon_social = request('razon_social');
            $empresa->nombre_empresa = request('nombre_empresa');
            $empresa->telefono = request('telefono');
            $empresa->direccion = request('direccion');
            $empresa->giro = request('giro');
            $empresa->save();
    
        return redirect()->route('empresa.index')->withSuccess('¡Datos de la Empresa Modificados!');



    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
