<?php

namespace App\Http\Controllers;

use App\Tracker;
use Illuminate\Http\Request;

class TrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackers = Tracker::all();

        return view('admin.trackers.index')->with(compact('trackers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trackers.create');
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
            'tracker_nome'=>'required', 'tracker_logo'=> 'required|image|max:2048',
            'tracker_email'=>'required','tracker_contacto'=>'required',
            ]); 

            $tracker = new Tracker($request->input()) ;
            
            if($file = $request->hasFile('tracker_logo')) {
            
                $file = $request->file('tracker_logo') ;
                
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path().'/images_upload/trackers' ;
                $file->move($destinationPath,$fileName);
                $tracker->tracker_logo = $fileName ;
            }

            $tracker->save();
            return redirect()->route('trackers.index')->with('successo', 'Adicionou uma Nova Seguadora!')->with('tracker_logo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function show(Tracker $tracker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracker $tracker)
    {
        return view('admin.trackers.edit',  compact('tracker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracker $tracker)
    {
        
        $request->validate([
            'tracker_nome'=>'required', 'tracker_logo'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tracker_email'=>'required','tracker_contacto'=>'required',
        ]);

        if($file = $request->hasFile('tracker_logo')) {
            
            $file = $request->file('tracker_logo') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images_upload/trackers' ;
            $file->move($destinationPath,$fileName);
            $tracker->tracker_logo = $fileName ;
        }

        $tracker->update($request->all());
        return redirect()->route('trackers.index') ->with('successo','Actualizou o nome da Tracker!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracker $tracker)
    {
        
        $tracker->delete();
        return redirect()->route('trackers.index')->with('success', 'Tracker Removida!');
    }
}
