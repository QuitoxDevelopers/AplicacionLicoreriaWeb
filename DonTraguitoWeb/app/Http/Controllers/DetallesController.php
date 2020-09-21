<?php

namespace App\Http\Controllers;

use App\detalles;
use App\pedidos;
use Illuminate\Http\Request;

class DetallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['detalles']=Detalles::paginate(10);
        return view('detalles.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('detalles.create');
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
        $datosDetalles=request()->except('_token');
        Detalles::insert($datosDetalles);

        return redirect()->action('DetallesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function show(detalles $detalles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function edit($pedido_id)
    {
        //
        $detalles= Detalles::findOrFail($pedido_id);
        return view('detalles.edit',compact('detalles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pedido_id)
    {
        //
        $datosDetalles=request()->except(['_token','_method']);
        Detalles::where('pedido_id','=',$pedido_id)->update($datosDetalles);

        $detalles= Detalles::findOrFail($pedido_id);
        return redirect()->action('DetallesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function destroy($pedido_id)
    {
        //
        Detalles::table('detalles')->delete($pedido_id);
        return redirect('pedidos');
    }
}
