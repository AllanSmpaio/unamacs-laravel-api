<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lagoa;

class LagoasController extends Controller
{
    /**
     * Lista todas as lagoas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Lagoa::all();
    }

    /**
     * Armazena uma nova lagoa.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lagoa = new Lagoa();
        $lagoa->nome = $request->nome;
        $lagoa->descricao = $request->descricao;
        $lagoa->save();
    }

    /**
     * Mostra a lagoa com o ID informado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Lagoa::findOrFail($id);
    }

    /**
     * Atualiza o cadastro da lagoa.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lagoa = Lagoa::findOrFail($id);

        if ($lagoa != null){
            $lagoa->nome = $request->nome;
            $lagoa->descricao = $request->descricao;
            $lagoa->save();
        }
        else{
            // Na vdd aq é pra retornar um status http mas eu esqueci como é
            return "";
        }
    }

    /**
     * Deletar lagoa
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lagoa = Lagoa::findOrFail($id);
        $lagoa->delete();
    }
}
