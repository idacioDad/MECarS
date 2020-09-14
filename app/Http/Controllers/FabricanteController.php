<?php

namespace App\Http\Controllers;

use App\Fabricante;
use Illuminate\Http\Request;

class FabricanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fabricantes = Fabricante::all();
        /*$fabricante = json_decode(json_decode($fabricantes));
        echo "<prev>"; print_r($fabricantes);die;*/
        return view('admin.fabricantes.index')->with(compact('fabricantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.fabricantes.create');
        
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
            
        'fabricante_nome'=>'required'
        ]);       
        $validated = $request->validated();
        Fabricante::create($request->all());
        return redirect()->route('/admin/fabricantes')->with('successo', 'Adicionou um Novo Fabricado!');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fabricante  $fabricante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('admin.fabricantes.show',compact('fabricante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fabricante  $fabricante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fabricante = Fabricante::find($id);
        return view('admin.fabricantes.edit',  compact('fabricante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fabricante  $fabricante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'fabricante_id' => 'required',
            'fabricante_nome' => 'required'
        ]);

        $fabricante->update($request->all());
        return redirect()->route('admin.fabricantes.index') ->with('successo','Actualizou o nome do fabricante!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fabricante  $fabricante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fabricante = Fabricante::find($id);
        $fabricante->delete();
        return redirect('admin.fabricantes')->with('success', 'Fabricante deleted!');
    }
}
