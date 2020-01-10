<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Instituicao;

class InstituicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Instituicao::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instituicao = new Instituicao();
        $instituicao->nome = $request->input('nome');
        $instituicao->cnpj= $request->input('cnpj');
        // Ver como pegar o ID pipipipopo
        //$instituicao->lagoa_id = ????
        $instituicao->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Instituicao::findOrFail($id);
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
        $instituicao = Instituicao::findOrFail($id);
        $instituicao->nome = $request->input('nome');
        $instituicao->cnpj = $request->input('cnpj');
        $instituica->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instituicao = Instituicao::findOrFail($id);
        $instituicao->delete();
    }
}
