<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FisicoQuimica;
use App\Lagoa;

class FisicoQuimicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FisicoQuimica::all();
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
        $fis_quim = new FisicoQuimica();
        $fis_quim->turbidez = $request->turbidez;
        $fis_quim->solidos_totais = $request->solidos_totais;
        $fis_quim->condutividade = $request->condutividade;
        $fis_quim->ph = $request->ph;
        $fis_quim->nitrogenio = $request->nitrogenio;
        $fis_quim->oxigenio = $request->oxigenio;
        $fis_quim->gas_carbonico = $request->gas_carbonico;
        $fis_quim->temperatura = $request->temperatura;
        $fis_quim->cloretos = $request->cloretos;
        $fis_quim->dureza = $request->dureza;
        $fis_quim->alcalinidade = $request->alcalinidade;
        $fis_quim->coleta_realizada_em = $request->data_coleta;
        $fis_quim->lagoa_id = $request->lagoa;
        $fis_quim->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // O findOrFail() já retorna um erro se n achar o id
        return FisicoQuimica::findOrFail($id);
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
        $fis_quim = FisicoQuimica::find($id);
        if ($fis_quim != null){
            $fis_quim = new FisicoQuimica();
            $fis_quim->turbidez = $request->turbidez;
            $fis_quim->solidos_totais = $request->solidos_totais;
            $fis_quim->condutividade = $request->condutividade;
            $fis_quim->ph = $request->ph;
            $fis_quim->nitrogenio = $request->nitrogenio;
            $fis_quim->oxigenio = $request->oxigenio;
            $fis_quim->gas_carbonico = $request->gas_carbonico;
            $fis_quim->temperatura = $request->temperatura;
            $fis_quim->cloretos = $request->cloretos;
            $fis_quim->dureza = $request->dureza;
            $fis_quim->alcalinidade = $request->alcalinidade;
            $fis_quim->coleta_realizada_em = $request->data_coleta;
            $fis_quim->save();
        }
        else{
            // aq tbm é um código HTTP
            return "";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fis_quim = FisicoQuimica::findOrFail($id);
        if ($fis_quim != null){
            $fis_quim->delete();
        }
        else{
            // Outro http status
            return "";
        }

    }
}
