<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos']=Productos::paginate(10);
        return view('productos.index', $datos);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
        //
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
        $datosProductos=request()->except('_token');
        if($request->hasFile('Imagen')){
            $datosProductos['Imagen']=$request->file('Imagen')->store('uploads','public');
        }

        Productos::insert($datosProductos);

        return redirect()->action('ProductosController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        //
        $producto= Productos::findOrFail($Id);
        return view('productos.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id)
    {
        //
        $datosProducto=request()->except(['_token','_method']);
        if($request->hasFile('Imagen')){
            $producto= Productos::findOrFail($Id);
            Storage::delete('public/'.$producto->Imagen);
            $datosProducto['Imagen']=$request->file('Imagen')->store('uploads','public');
        }

        Productos::where('Id','=',$Id)->update($datosProducto);

        $producto= Productos::findOrFail($Id);
        //return view('productos.edit',compact('producto'));
        return redirect()->action('ProductosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto=Productos::findOrFail($id);
        if(Storage::delete('public/'.$producto->Imagen))
        {
            DB::table("productos")->delete($id);
        }

        return redirect('productos');
    }
}
