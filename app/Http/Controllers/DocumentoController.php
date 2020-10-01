<?php

namespace App\Http\Controllers;

use App\Documento;
use App\Seguradora;
use App\Parque;
use App\Tracker;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos = Documento::with('seguradoras','parques','trackers')->get();
        
        return view('admin.documentos.index')->with(compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seguradoras = Seguradora::all(['seguradora_id', 'seguradora_nome']);
        $trackers = Tracker::all(['tracker_id', 'tracker_nome']);
        $parques = Parque::all(['parque_id', 'parque_nome']);
        return view('admin.documentos.create', compact('seguradoras','trackers','parques'))->with(['seguradoras'=> $seguradoras], ['trackers'=> $trackers],['parques'=> $parques]);
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
            'documento_nome'=>'required',
            'documento_descr'=>'required',

            ]);       
            Documento::create($request->all());
            return redirect()->route('documentos.index')->with('successo', 'Adicionou um Novo Documento!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        $documentos = Documentos::with('seguradoras','parques','trackers')->get();
        $seguradoras = Seguradora::all(['seguradora_id', 'seguradora_nome']);
        $trackers = Tracker::all(['tracker_id', 'tracker_nome']);
        $parques = Parque::all(['parque_id', 'parque_nome']);
        return view('admin.documentos.edit')->with(compact('documentos','documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento $documento)
    {
        $request->validate([   
            'documento_nome'=>'required',
            'id_seguradora'=>'required',
            'id_parque'=>'required',
            'id_tracker'=>'required',
            'documento_decr'=>'required',

            ]); 

            return redirect()->route('documentos.index') ->with('successo','Actualizou o  Documento!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento $documento)
    {
        $documento->delete();
        return redirect()->route('documentos.index')->with('successo', 'Documento Removido!');
    }
}
