<?php

namespace App\Http\Controllers;

use App\Acessorio;
use Illuminate\Http\Request;

class AcessorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acessorios = Acessorio::all();

        return view('admin.acessorios.index')->with(compact('acessorios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.acessorios.create');
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
            'acessorio_nome'=>'required',
            ]);       
            Acessorio::create($request->all());
            return redirect()->route('acessorios.index')->with('successo', 'Adicionou um Novo Acessorio!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Acessorio  $acessorio
     * @return \Illuminate\Http\Response
     */
    public function show(Acessorio $acessorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Acessorio  $acessorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Acessorio $acessorio)
    {
        return view('admin.acessorios.edit',  compact('acessorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acessorio  $acessorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acessorio $acessorio)
    {
        $request->validate([
            'acessorio_nome' => 'required',
        ]);

        $acessorio->update($request->all());
        return redirect()->route('acessorios.index') ->with('successo','Actualizou o nome do acessorio!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acessorio  $acessorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acessorio $acessorio)
    {
        $acessorio->delete();
        return redirect()->route('acessorios.index')->with('success', 'Acessorio Removido!');
    }
}
