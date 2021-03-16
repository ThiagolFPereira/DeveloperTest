<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class tb_empresas extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'telefone',
        'endereco',
        'cep',
        'cidade',
        'estado',
        'descricao',
        'categoria'

    ];

    protected $table = 'empresas';

    public static function consultaEmpresa($request){
        $busca  = $request->busca;

        $retorno = tb_empresas::select()->where('titulo','LIKE','%'.$busca.'%')
        ->orWhere('endereco','LIKE','%'.$busca.'%')
        ->orWhere('cep','LIKE','%'.$busca.'%')
        ->orWhere('cidade','LIKE','%'.$busca.'%')
        ->orWhere('categoria','LIKE','%'.$busca.'%')
        ->get();
        return $retorno;



    }

    


    public static function gravaNovEmpresa(){
        $retorno =DB::table('empresas')->insert(array('titulo' => $titulo,
        'telefone' => $telefone,'endereco'=>$endereco,
        'cep' => $cep,    
        'cidade'=>$cidade,'estado' => $estado, 
        'descricao' => $descricao,'categoria' => $categoria));  
        return $retorno;
    }





}
