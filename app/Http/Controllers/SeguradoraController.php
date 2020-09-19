<?php

namespace App\Http\Controllers;

use App\Seguradora;
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
            'seguradora_email'=>'required','seguradora_contacto'=>'required',
            ]); 

            $seguradora = new Seguradora($request->input()) ;
            
            if($file = $request->hasFile('seguradora_logo')) {
            
                $file = $request->file('seguradora_logo') ;
                
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path().'/images_upload/seguradoras' ;
                $file->move($destinationPath,$fileName);
                $seguradora->seguradora_logo = $fileName ;
            }

            $seguradora->save();
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
        return view('admin.seguradoras.edit',  compact('seguradora'));
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

        if($file = $request->hasFile('seguradora_logo')) {
            
            $file = $request->file('seguradora_logo') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images_upload/seguradoras' ;
            $file->move($destinationPath,$fileName);
            $seguradora->seguradora_logo = $fileName ;
        }

        $seguradora->update($request->all());
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
