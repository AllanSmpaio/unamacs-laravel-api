<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Microbiologia;
use App\Lagoa;

class MicrobiologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Microbiologia::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lagoas = Lagoa::all();
        $microbiologia = new Microbiologia();
        $microbiologia->coliformes_termotolerantes = $request->coliformes_termotolerantes;
        $microbiologia->coliformes_totais = $request->coliformes_totais;
        $microbiologia->bacterias_aerobicas = $request->bacterias_aerobicas;
        $microbiologia->bacterias_mesofilas = $request->bacterias_mesofilas;
        $microbiologia->data_da_coleta = $request->data_coleta;
        $microbiologia->lagoa_id = $request->lagoa;
        $microbiologia->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $microbiologia = Microbiologia::findOrFail($id);
        return $microbiologia;
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
        $microbiologia = Microbiologia::findOrFail($id);
        $microbiologia->coliformes_termotolerantes = $request->coliformes_termotolerantes;
        $microbiologia->coliformes_totais = $request->coliformes_totais;
        $microbiologia->bacterias_aerobicas = $request->bacterias_aerobicas;
        $microbiologia->bacterias_mesofilas = $request->bacterias_mesofilas;
        $microbiologia->data_da_coleta = $request->data_coleta;
        $microbiologia->lagoa_id = $request->lagoa;
        $microbiologia->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $microbiologia = Microbiologia::findOrFail($id);
        $microbiologia->delete();
    }
}
