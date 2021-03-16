<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_empresas;


class GravaFormulario extends Controller
{
    //

    public function gravarFormulario(Request $request,tb_empresas $tb_empresas)

    {

        /*dd($request->categoria);
        $titulo=(string)$request->titulo;
        $telfone=(string)$request->telfone;
        $endereco=(string)$request->endereco;
        $cep=(string)$request->cep;
        $cidade=(string)$request->cidade;
        $estado=(string)$request->estado;
        $descricao=(string)$request->descricao;
        $categoria=(string)$request->categoria;
        */

        $categoria = $request->input('categoria');
        $categoria = implode(',', $categoria);

        $input = $request->except('categoria');
        //Assign the "mutated" news value to $input
        $input['categoria'] = $categoria;

        tb_empresas::create($input);
        return redirect()->back();
    }




}
