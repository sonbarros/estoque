<?php

namespace estoque\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function listar(){
        
        $produtos = DB::select('select * from produtos');
        //dd($produtos);
        
        return view('produto/listagem')->with('produtos', $produtos);
    }

    public function mostrarDetalhesProduto($id, $nome){
        
        // o parametro $id é o valor enviado na request
        $produto = DB::select('select * from produtos where id = ?', [$id]);    

        //return $nome;
        return view('produto/detalhes')->with('p', $produto[0]);
    }
}


