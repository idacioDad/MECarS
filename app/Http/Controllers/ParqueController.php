<?php

namespace App\Http\Controllers;

use App\Parque;
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

            $parque->save();
            return redirect()->route('parques.index')->with('successo', 'Adicionou uma Nova Seguadora!')->with('parque_logo');
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
        return view('admin.parques.edit',  compact('parque'));
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

        $parque->update($request->all());
        return redirect()->route('parques.index') ->with('successo','Actualizou o nome da Parque!');
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
