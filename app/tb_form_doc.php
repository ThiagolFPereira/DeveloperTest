<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\tb_empresas;

class tb_form_doc extends Model
{
   public  function  gravaformdoc(Request $formdoc)
   {
        
        /*
        $user = auth()->user();                          
        $ti=($user->email);
        $usuario_name= ($user->name); 
        $data_up_form =date("Y/m/d H:i:s");
        $data_DB =date("Y-m-d H:i:s");*/
             
        $titulo=(string)$formdoc->titulo;
        $telefone=(string)$formdoc->telefone;
        $endereco=(string)$formdoc->endereco;
        $cep=(string)$formdoc->cep;
        $estado=(string)$formdoc->estado;
        $cidade=(string)$formdoc->cidade;
        $descricao=(string)$formdoc->descricao;        
     
        $retorno =DB::table('empresas')->insert(array('titulo' => $titulo,
                        'telefone' => $telefone,'endereco'=>$endereco,
                        'cep' => $cep,                        
                        'estado' => $estado,
                        'cidade' => $cidade,
                        'descricao'=>$descricao));
                        return $retorno;      

    }
}