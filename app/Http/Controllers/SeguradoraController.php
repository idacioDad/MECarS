<?php

namespace App\Http\Controllers;

use App\Seguradora;
use App\Endereco;
use Illuminate\Http\Request;

class SeguradoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seguradoras = Seguradora::all();

        return view('admin.seguradoras.index')->with(compact('seguradoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seguradoras = Seguradora::with('endereco')->get();
        //$endereco = Endereco::with('seguradora')->get();
        return view('admin.seguradoras.create');
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
            'seguradora_nome'=>'required', 'seguradora_logo'=> 'required|image|max:2048',
            'seguradora_email'=>'required','seguradora_contacto'=>'required','ender_provincia'=>'required',
            'ender_distrito'=>'required','ender_avenida'=>'required',
            ]); 

            $seguradora = new Seguradora() ;
            $seguradora->seguradora_nome=$request->get('seguradora_nome');
           
            
            if($file = $request->hasFile('seguradora_logo')) {
            
                $file = $request->file('seguradora_logo') ;
                
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path().'/images_upload/seguradoras' ;
                $file->move($destinationPath,$fileName);
                $seguradora->seguradora_logo = $fileName ;
            }

            $seguradora->seguradora_email=$request->get('seguradora_email');
            $seguradora->seguradora_contacto=$request->get('seguradora_contacto');
            $seguradora->save();
            $seguradora_id=$seguradora->seguradora_id;

            $endereco= new Endereco();
            $endereco->ender_provincia=$request->get('ender_provincia');
            $endereco->distrito_cidade=$request->get('ender_distrito');
            $endereco->ender_rua_Av=$request->get('ender_avenida');
            $endereco->id_seguradora= $seguradora_id;
            $endereco->save();

            return redirect()->route('seguradoras.index')->with('successo', 'Adicionou uma Nova Seguadora!')->with('seguradora_logo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seguradora  $seguradora
     * @return \Illuminate\Http\Response
     */
    public function show(Seguradora $seguradora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seguradora  $seguradora
     * @return \Illuminate\Http\Response
     */
    public function edit(Seguradora $seguradora)
    {
        $seguradoras = Seguradora::with('endereco')->get();
        $endereco = Endereco::all();
        return view('admin.seguradoras.edit',  compact('seguradora','seguradoras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seguradora  $seguradora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seguradora $seguradora)
    {
        $request->validate([
            'seguradora_nome'=>'required', 'seguradora_logo'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'seguradora_email'=>'required','seguradora_contacto'=>'required',
        ]);

        $seguradora->seguradora_nome=$request->get('seguradora_nome');
        if($file = $request->hasFile('seguradora_logo')) {
            
            $file = $request->file('seguradora_logo') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images_upload/seguradoras' ;
            $file->move($destinationPath,$fileName);
            $seguradora->seguradora_logo = $fileName ;
        }

        $seguradora->seguradora_email=$request->get('seguradora_email');
        $seguradora->seguradora_contacto=$request->get('seguradora_contacto');
        $seguradora->push();
        $seguradora_id=$seguradora->seguradora_id;

        $endereco = new Endereco();
        $endereco= Seguradora::find('1')->endereco;
            $endereco->ender_provincia=$request->get('ender_provincia');
            $endereco->distrito_cidade=$request->get('ender_distrito');
            $endereco->ender_rua_Av=$request->get('ender_avenida');
            //$endereco->id_seguradora= $seguradora_id;
            $endereco->push();

       /// $seguradora->update($request->all());
        return redirect()->route('seguradoras.index') ->with('successo','Actualizou o nome da Parque!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seguradora  $seguradora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seguradora $seguradora)
    {
        $seguradora->delete();
        return redirect()->route('seguradoras.index')->with('success', 'Seguradora Removida!');
    }
}
