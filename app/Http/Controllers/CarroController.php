<?php

namespace App\Http\Controllers;

use App\Carro;
use App\Parque;
use App\Modelo;
use App\Categoria;
use App\CarPhoto;
use App\Acessorio;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $carros = Carro::with('parque','modelo','categoria', 'acessorios','carphotos')->get();
        
        return view('admin.carros.index')->with(compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parques = Parque::all(['parque_id', 'parque_nome']);
        $modelos = Modelo::all(['modelo_id', 'modelo_nome']);
        $categorias = Categoria::all(['categoria_id', 'categoria_nome']);
        return view('admin.carros.create', compact('parques','modelos','categorias'))->with(['parques'=> $parques], ['modelos'=> $modelos],['categorias'=> $categorias]);
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
            'id_parque.required'=>'parque required','id_modelo.required'=>'modelo required','id_categoria.required'=>'categoria required','carro_preco.required'=>'carro required',
            'carro_ano_fabrico.required'=>' ano required','carro_Km.required'=>'Quilometragem required','carro_foto.required'=>'foto required|image|max:2048',
            'carro_motorSize.required'=>'size required','carro_motorCode.required'=>'motor code required','carro_conducao.required'=>'conducao required',
            'carro_caixa.required'=>'caixa required','carro_versaoClasse.required'=>'versao required','carro_volante'=>'required',
            'carro_corExterna.required'=>'cor required','carro_combustivel.required'=>'combustivel required','carro_assentos.required'=>'assentos required',
            'carro_portas.required'=>'portas required','carro_peso.required'=>'peso required','carro_lotacao.required'=>'lotacao required','car_foto.required'=>'fotos required|image|max:2048',
            ]);

            $carro = new Carro($request->input());
            $carro->id_parque=$request->get('id_parque');
            $carro->id_modelo=$request->get('id_modelo');
            $carro->id_categoria=$request->get('id_categoria');
            $carro->carro_preco=$request->get('carro_preco');
            $carro->carro_ano_fabrico=$request->get('carro_ano_fabrico');
            $carro->carro_Km=$request->get('carro_Km');

            if($file = $request->hasFile('carro_foto')) {
            
                $file = $request->file('carro_foto') ;
                
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path().'/images_upload/carros_Banner' ;
                $file->move($destinationPath,$fileName);
                $carro->carro_foto = $fileName ;
            }
            $carro->carro_motorSize=$request->get('carro_motorSize');
            $carro->carro_motorCode=$request->get('carro_motorCode');
            $carro->carro_conducao=$request->get('carro_conducao');
            $carro->carro_caixa=$request->get('carro_caixa');
            $carro->carro_versaoClasse=$request->get('carro_versaoClasse');
            $carro->carro_corExterna=$request->get('carro_corExterna');
            $carro->carro_combustivel=$request->get('carro_combustivel');
            $carro->carro_assentos=$request->get('carro_assentos');
            $carro->carro_portas=$request->get('carro_portas');
            $carro->carro_peso=$request->get('carro_peso');
            $carro->carro_lotacao=$request->get('carro_lotacao');
            $carro->save();
            $id_carro=$carro->carro_id;

            if($images =$request->hasFile('car_foto')){
            $images = $request->file('car_foto'); // collection

            // loop over collection an store each image 
            foreach($images as $image) {
                $filenome = $image->getClientOriginalName();
                $destinationPath = public_path().'/images_upload/carros';

                $uploadSuccess = $image->move($destinationPath, $filenome);

                $carphoto = new CarPhoto(); 
                $carphoto->id_carro = $id_carro;
                $carphoto->car_foto = $filenome;
                $carphoto->save();
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(Carro $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(Carro $carro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carro $carro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carro $carro)
    {
       
        $carro->delete();
        return redirect()->route('carros.index')->with('successo', 'Carro Removido!');
    }
}
