<?php

namespace App\Http\Controllers;

use App\Cart;
use Session;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $carts = Cart::with('carro')->where('id_user',Auth::user()->id)->orderBy('id','Desc')->get()->toArray();
        }else{
            $carts = Cart::with('carro')->where('session_id',Session::get('session_id'))->orderBy('id','Desc')->get()->toArray();
        }
        
        return view('catalogo.cart')->with(compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
 * Add product to cart
 * 
 */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $data= $request->all();
    
            //Gerar Session Id
            $session_id = Session::get('session_id');
            if(empty($session_id)){
                $session_id = Session::getId();
                Session::put('session_id',$session_id);
            }
    
            //Verificar se viatura existe no carrinho
            if(Auth::check()){
                $viaturas= Cart::where(['id_carro'=>$data['carro_id'], 'id_user'=>Auth::user()->id])->count();

            }else{
                $viaturas= Cart::where(['id_carro'=>$data['carro_id'], 'session_id'=>Session::get('session_id')])->count();
            }

           
            if($viaturas>0){
                $message="Voce ja adicionou este carro ao carrinho";
                session::flash('error_message',$message);
                return redirect()->back();
            }
    
            //Adicionar ao carrinho
            //Cart::insert(['session_id'=>$session_id,'id_carro'=>$data['carro_id'],'quantity'=>$data['quantity']]);
            $cart = new Cart();
            $cart->session_id =$session_id;
            $cart->id_user= Auth::user()->id;
            $cart->id_carro= $data['carro_id'];
            $cart->quantity= $data['quantity'];
            $cart->save();
            $message="Carro adicionado ao carrinho";
            session::flash('messagem_sucesso',$message);
            return redirect()->back();
    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
