<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\tb_empresas;

class BuscaEmpresas extends Controller
{
    //
    public function busca(Request $request,tb_empresas $tb_empresas  ){
        $retorno =   $tb_empresas::consultaEmpresa($request);

        return view('pages.tabela',compact('retorno'));
    }




}
