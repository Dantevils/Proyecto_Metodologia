<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Herramienta;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Session;


class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $herramientas = Herramienta::all();
        return view('adminlte::layouts.partials.heramientas.estado',['herramientas'=>$herramientas]);
    }

    /*Para llamar a asignacion.blade y mostrar la vista con el formulario (ingreso de materiales)*/
    public  function ingreso(){
        return view('adminlte::layouts.partials.heramientas.ingreso');

    }
    /*Para llamar a estado.blade y mostrar la vista con los datos*/
    public function estado(){
        $herramientas = Herramienta::all();
        return view('adminlte::layouts.partials.heramientas.estado',['herramientas'=>$herramientas]);
    }
    /*Para llamar a despacho.blade y mostrar la vista con los datos*/
    public function despacho(){
      

        $herramientas = Herramienta::all();
        $foo =  $herramientas['id'];
        return view('adminlte::layouts.partials.heramientas.despacho',['herramientas'=>$herramientas,'foo'=>$foo]);
    }
    
    /**
     * $traza = Traza_movimiento::all();
    $partida = Partida::all();
    return view('partials.compras.statuspedido',['traza'=>$traza,'partida'=>$partida]);
     * 
     * 
     */
    
    

    /**resources/views/vendor/adminlte/layouts/partials/heramientas/ingreso.blade.php
     *
     *
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
    public function store(Request $request) //
    {
       // $herramienta = new Herramienta();
        //$herramienta->marca = Input::get('marca');
        //$herramienta->descripcion = Input::get('descripcion');
        //$herramienta->stock = Input::get('stock');
        //$herramienta->save();

        $herramienta = new Herramienta();
        $herramienta->marca = $request->marca;
        $herramienta->descripcion = $request->descripcion;
        $herramienta->stock = $request->stock;
        $herramienta->save();

        /*
        $traza_movimiento = new Traza_movimiento();
        $traza_movimiento->tra_sub = Partida::find($cubicacion->par_id);
        $traza_movimiento->tra_materiales = Input::get('name');
        $traza_movimiento->tra_um = Input::get('email');
        $traza_movimiento->tra_cantidad = Input::get('nerd_level');
        $traza_movimiento->tra_fechasugerida = Input::get('nerd_level');
        $traza_movimiento->save();
        //Prueba para crear un material en la cubicacion
        $cubicacion2 = new Cubicacion();
        $cubicacion2->cub_id = 2;
        $cubicacion2->cub_matetial = 'Material2';
        $cubicacion2->cub_um = 'Litros';
        $cubicacion2->cub_cantidad = 100;
        $cubicacion2->save();
        */
        // Redireccionar
      // Session::flash('message', 'Material Guardadado!');
        return redirect()->route('herramienta.index'); //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
