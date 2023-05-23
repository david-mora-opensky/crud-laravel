<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos=Contacto::all();
        return view('contacto.index', compact('contactos'));
        //
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
        $contactos=new Contacto;
        $contactos->nombre=$request->input('nombre');
        $contactos->telefono=$request->input('telefono');
        $contactos->direccion=$request->input('direccion');
        $contactos->save();
        return redirect()->back();

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $contactos=Contacto::find($id);
        return view('contacto.modal-info',compact('contactos'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contactos=Contacto::find($id);
        $contactos->nombre=$request->input('nombre');
        $contactos->telefono=$request->input('telefono');
        $contactos->direccion=$request->input('direccion');
        $contactos->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactos= Contacto::find($id);  
        $contactos->delete();
        return redirect()->back();
    }
}
