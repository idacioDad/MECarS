<?php

namespace App\Http\Controllers;

use App\Parque;
use App\Endereco;
use Illuminate\Http\Request;

class ParqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parques = Parque::all();
        return view('admin.parques.index')->with(compact('parques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parques = Parque::with('endereco')->get();
        //$endereco = Endereco::with('parque')->get();
        return view('admin.parques.create');
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
            'parque_nome'=>'required', 'parque_logo'=> 'required|image|max:2048',
            'parque_email'=>'required','parque_contacto'=>'required',
            ]); 

            $parque = new Parque($request->input()) ;
            
            if($file = $request->hasFile('parque_logo')) {
            
                $file = $request->file('parque_logo') ;
                
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path().'/images_upload/parques' ;
                $file->move($destinationPath,$fileName);
                $parque->parque_logo = $fileName ;
            }

            $parque->parque_email=$request->get('parque_email');
            $parque->parque_contacto=$request->get('parque_contacto');
            $parque->save();
            $parque_id=$parque->parque_id;

            $endereco= new Endereco();
            $endereco->ender_provincia=$request->get('ender_provincia');
            $endereco->distrito_cidade=$request->get('ender_distrito');
            $endereco->ender_rua_Av=$request->get('ender_avenida');
            $endereco->id_parque= $parque_id;
            $endereco->save();

            return redirect()->route('parques.index')->with('successo', 'Adicionou um Novo Parque!')->with('parque_logo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parque  $parque
     * @return \Illuminate\Http\Response
     */
    public function show(Parque $parque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parque  $parque
     * @return \Illuminate\Http\Response
     */
    public function edit(Parque $parque)
    {
        $parques = Parque::with('endereco')->get();
        $endereco = Endereco::all();
        return view('admin.parques.edit',  compact('parque','parques'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parque  $parque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parque $parque)
    {
        $request->validate([
            'parque_nome'=>'required', 'parque_logo'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'parque_email'=>'required','parque_contacto'=>'required',
        ]);

        if($file = $request->hasFile('parque_logo')) {
            
            $file = $request->file('parque_logo') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images_upload/parques' ;
            $file->move($destinationPath,$fileName);
            $parque->parque_logo = $fileName ;
        }

        $parque->parque_email=$request->get('parque_email');
        $parque->parque_contacto=$request->get('parque_contacto');
        $parque->push();
        $parque_id=$parque->parque_id;

        $endereco = new Endereco();
        $endereco= Parque::find('1')->endereco;
            $endereco->ender_provincia=$request->get('ender_provincia');
            $endereco->distrito_cidade=$request->get('ender_distrito');
            $endereco->ender_rua_Av=$request->get('ender_avenida');
            $endereco->id_parque= $parque_id;
            $endereco->push();

       /// $parque->update($request->all());
        return redirect()->route('parques.index') ->with('successo','Actualizou o nome do Parque!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parque  $parque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parque $parque)
    {
        $parque->delete();
        return redirect()->route('parques.index')->with('success', 'Parque Removida!');
    }
}
