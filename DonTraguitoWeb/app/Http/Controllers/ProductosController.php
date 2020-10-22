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
        $datos['productos']=Productos::all();
        return view('productos.index',$datos);
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
        if($request->hasFile('Imagen_Producto')){
            $datosProductos['Imagen_Producto']=$request->file('Imagen_Producto')->store('uploads','public');
        }

        Productos::insert($datosProductos);

        return redirect('productos');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Producto)
    {
        $producto= Productos::findOrFail($Id_Producto);
        return view('productos.edit',compact('producto'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_Producto)
    {
        //
        $datosProducto=request()->except(['_token','_method']);
        if($request->hasFile('Imagen_Producto')){
            $producto= Productos::findOrFail($Id_Producto);
            Storage::delete('public/'.$producto->Imagen_Producto);
            $datosProducto['Imagen_Producto']=$request->file('Imagen_Producto')->store('uploads','public');
        }

        Productos::where('Id_Producto','=',$Id_Producto)->update($datosProducto);

        //return view('productos.edit',compact('producto'));
        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Producto)
    {
        $producto=Productos::findOrFail($Id_Producto);
        if(Storage::delete('public/'.$producto->Imagen_Producto))
        {
            $producto->delete();
        }

        return redirect('productos');
    }
}
