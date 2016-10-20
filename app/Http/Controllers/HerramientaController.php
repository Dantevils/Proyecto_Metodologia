<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('HerramientaController funciona');
        //return view('vendor/.blade.php'); /*resources/views/vendor/adminlte/layouts/partials/heramientas/ingreso.blade.php*/
       //return view('adminlte::home');
        return view('adminlte::layouts.partials.heramientas.ingreso');
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
    public function store(Request $request)
    {
        //
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
