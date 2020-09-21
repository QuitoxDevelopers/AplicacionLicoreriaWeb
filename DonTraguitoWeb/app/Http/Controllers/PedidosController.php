<?php

namespace App\Http\Controllers;

use App\Pedidos;
use App\Usuarios;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['pedidos']=Pedidos::paginate(30);
        return view('pedidos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosPedidos=request()->all();
        $datosPedidos=request()->except('_token');
        Pedidos::insert($datosPedidos);

        return redirect()->action('PedidosController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(Pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pedido= Pedidos::findOrFail($id);
        return view('pedidos.edit',compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosPedidos=request()->except(['_token','_method']);
        Pedidos::where('id','=',$id)->update($datosPedidos);

        $pedidos= Pedidos::findOrFail($id);
        return redirect()->action('PedidosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pedidos::destroy($id);
        return redirect('pedidos');
    }
}
