<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request){

        $nome = $request->input('nome','Victor');
        $idade = $request->input('idade',1);
        $cidade = $request->input('cidade',1);

        $lista = [
            'farinha',
            'ovo',
            'leite',
            'açucar',
            'manteiga',
            'fermento',
            'banana'
        ];

        return view('admin.config',["nome" => $nome, "idade" => $idade, 'cidade' => $cidade, 'lista' => $lista]);
    }

    public function info(){
        echo 'Configurações Info 3';
    }

    public function permissoes(){
        echo "Configurações Permissões 3";
    }
}
