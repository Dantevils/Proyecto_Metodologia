<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Proveedor;

class ProveedorController extends Controller
{

    /*Para llamar a estado.blade y mostrar la vista con la lista de proveedores y sus datos asociados*/
    public function estado(){
        $proveedores = Proveedor::all();
        return view('adminlte::layouts.partials.proveedores.estado',['proveedores'=>$proveedores]);
    }

    public function index()
    {

        $proveedores = Proveedor::all();
        return view('adminlte::layouts.partials.proveedores.estado',['proveedores'=>$proveedores]);
    }

    /*Para llamar a asignacion.blade y mostrar la vista con el formulario (ingreso de materiales)*/
    public  function ingreso(){
        return view('adminlte::layouts.partials.proveedores.ingreso');

    }

    /*Para llamar a despacho.blade y mostrar la vista con los datos*/
    public function actualizacion(){


        $proveedor = Proveedor::all();
        $test = Proveedor::all();

        $myArray = array();
        foreach ( $test as $o):
            $myArray[] = $o->id;
        endforeach;

      // dd($foo);
     //   dd($myArray);


        return view('adminlte::layouts.partials.proveedores.actualizacion',['proveedor'=>$proveedor,'array'=>$myArray]);
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
    public function store(Request $request)
    {
        // $herramienta = new Herramienta();
        //$herramienta->marca = Input::get('marca');
        //$herramienta->descripcion = Input::get('descripcion');
        //$herramienta->stock = Input::get('stock');
        //$herramienta->save();

        $proveedor = new Proveedor();
        $proveedor->nombre = $request->nombre;
        $proveedor->fono = $request->fono;
        $proveedor->email = $request->email;
        $proveedor->detalle = $request->detalle;
        $proveedor->save();



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
        return redirect()->route('proveedor.index'); //
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
    public function edit($request)
    {
        $proveedor = Proveedor::all();
        $id = $request->select_id; /*Prodiamos cambiarlo por algun tipo de rut*/
        dd($id);

        $proveedor = $proveedor->find($id);
        if ($request->nombre != NULL){
            $proveedor->nombre = $request->nombre;}

        if ($request->fono != NULL){
            $proveedor->fono = $request->fono;}

        if ($request->email != NULL){
            $proveedor->email = $request->email;}

        if ($request->detalle != NULL){
            $proveedor->detalle = $request->detalle;}

        $proveedor->save();


        return redirect()->route('proveedor.index'); //
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


        $proveedor = Proveedor::all();
        $id = $request->select_id; /*Prodiamos cambiarlo por algun tipo de rut*/
        dd($id);

        $proveedor = $proveedor->find($id);
        if ($request->nombre != NULL){
        $proveedor->nombre = $request->nombre;}

        if ($request->fono != NULL){
        $proveedor->fono = $request->fono;}

        if ($request->email != NULL){
        $proveedor->email = $request->email;}

        if ($request->detalle != NULL){
        $proveedor->detalle = $request->detalle;}

        $proveedor->save();


        return redirect()->route('proveedor.index'); //




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
