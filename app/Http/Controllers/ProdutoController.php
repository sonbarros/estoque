<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function listar(){
        
        $produtos = DB::select('select * from produtos');
        //dd($produtos);
        
        return view('produto/listagem')->with('produtos', $produtos);
        // $produtos
    }

    public function mostrarDetalhesProduto($id, $nome){
        
        // o parametro $id é o valor enviado na request, nesse caso sem o nome do parametro request/1,textoExemplo
        $produto = DB::select('select * from produtos where id = ?', [$id]); // o segundo parametro subtituirá o id   

        //return $nome;
        return view('produto/detalhes')->with('p', $produto[0]);
         
    }

    public function novo(){
        return view('produto/formulario');
    }

    public function adiciona(Request $request){
        // pegar as informações no formulario 
        // salvar no banco de dados
        
        $nomeProduto = $request->nome;
        $quantidade = $request->quantidade;
        $descricao = $request->descricao;
        
        DB::insert('insert into produtos(nome, quantidade, descricao) values (?, ?, ?)', array($nomeProduto, $quantidade, $descricao));
        
        /*
            reedirecionando para URI
            Quando foi inserido os dados no banco vamos redirecionar a pagina
            para listagem de produtos, e no final na pagina vamos inserir a 
            informação que foi adicionado com sucesso.
            e como precisamos informar o nome do produto nessa listagem de 
            sucesso vamos reencaminhar os dados utilizando o metodo 
            ->withInput();
         */
         //return redirect('/produtos')->withInput($request->only('nome'));
        
        /*
            redireconando para ações ou metodos
         */
        return redirect()->action('ProdutoController@listar')->withInput($request->only('nome'));

        /*
            retornando uma view
         */
        //return view('produto/adicionado')->with('nomeProduto', $nomeProduto);
    }
}


