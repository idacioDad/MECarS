<?php

namespace App\Http\Controllers;

use App\Modelo;
use App\Fabricante;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = Modelo::with('fabricantes')->get();

        return view('admin.modelos.index')->with(compact('modelos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fabricantes = Fabricante::all(['fabricante_id', 'fabricante_nome']);
        return view('admin.modelos.create')->with(['fabricantes'=> $fabricantes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([   
            'modelo_nome'=>'required',
            'id_fabricante'=>'required',
            ]);       
            Modelo::create($request->all());
            return redirect()->route('modelos.index')->with('successo', 'Adicionou um Novo Modelo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function show(Modelo $modelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function edit(Modelo $modelo)
    {
        $modelos = Modelo::with('fabricantes')->get();
        return view('admin.modelos.edit')->with(compact('modelos','modelo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelo $modelo)
    {
        $request->validate([
            'modelo_nome'=>'required',
            'id_fabricante' => 'required',
        ]);

        $modelo->update($request->all());
        return redirect()->route('modelos.index') ->with('successo','Actualizou o nome do Modelo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modelo $modelo)
    {
        $modelo->delete();
        return redirect()->route('modelos.index')->with('successo', 'Modelo Removido!');
    }
}
