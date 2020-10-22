<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Pedidos;
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
        $datos['pedidos']=Pedidos::all();
        $datosClientes['clientes']=Clientes::all();
        return view('pedidos.index',$datos,$datosClientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosClientes['clientes']=Clientes::all();
        return view('pedidos.create',$datosClientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPedidos=request()->except('_token');
        Pedidos::insert($datosPedidos);
        return redirect('pedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(Pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Pedido)
    {
        $pedidos= Pedidos::findOrFail($Id_Pedido);
        return view('pedidos.edit',compact('pedidos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_Pedido)
    {
        $datosPedidos=request()->except(['_token','_method']);
        Pedidos::where('Id_Pedidos', '=', $Id_Pedido)->update($datosPedidos);
        return redirect('Pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Pedido)
    {
        $pedidos=Pedidos::findOrFail($Id_Pedido);
        $pedidos->delete();
        return redirect('pedidos');
        //
    }
}
