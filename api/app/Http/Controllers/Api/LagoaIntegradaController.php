<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LagoaIntegrada;
use App\Lagoa;
use App\Microbiologia;
use App\FisicoQuimica;
use App\Local;

class LagoaIntegradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LagoaIntegrada::all();
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
        $microbiologias = Microbiologia::all();
        $fisico_quimicas = FisicoQuimica::all();
        $locais = Local::all();
        $integrada = new LagoaIntegrada();
        $integrada->lagoa_id = $request->lagoa;
        $integrada->fisicoquimica_id = $request->fisicoquimica;
        $integrada->microbiologia_id = $request->microbiologia;
        $integrada->locais_id = $request->locals;
        $integrada->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $integrada = LagoaIntegrada::findOrFail($id);
        return $integrada;
    }

    public function update(Request $request, $id)
    {
        $lagoas = Lagoa::all();
        $microbiologias = Microbiologia::all();
        $fisico_quimicas = FisicoQuimica::all();
        $locais = Local::all();
        $integrada = LagoaIntegrada::findOrFail($id);
        $integrada->lagoa_id = $request->lagoa;
        $integrada->fisicoquimica_id = $request->fisicoquimica;
        $integrada->microbiologia_id = $request->microbiologia;
        $integrada->locais_id = $request->locals;
        $integrada->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $integrada = LagoaIntegrada::findOrFail($id);
        $integrada->delete();
    }
}
