<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\produto;
use app\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
    public function listar(){
        
        $produtos = Produto::all();
        //dd($produtos);
        
        return view('produto/listagem')->with('produtos', $produtos);
        // $produtos
    }

    public function mostrarDetalhesProduto($id, $nome){
        
        // o parametro $id é o valor enviado na request, nesse caso sem o nome do parametro request/1,textoExemplo
        $produto = Produto::find($id);

        //return $nome;
        return view('produto/detalhes')->with('p', $produto);
         
    }

    public function novo(){
        return view('produto/formulario');
    }

    public function adiciona(Request $request, ProdutoRequest $produtoRequest){
        // pegar as informações no formulario 
        // salvar no banco de dados
        
        $params = $request->all();
        

        $produto = new Produto($params);
        $produto->save();
        /*
            o metodo create() abaixo é uma outra forma de
            inserir os dados no banco, tera o mesmo efeito
            do metodo save()
         */
        //$produto =  $produto->create($params);
        
        /*
        $produto->nome = $request->nome;
        $produto->quantidade = $request->quantidade;
        $produto->descricao = $request->descricao;
        */
        
         // metodo da classe Model
        
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
            nesse exemplo não vou retornar a view, mais direcionar novamente para
            a propria lista
         */
        //return view('produto/adicionado')->with('nomeProduto', $nomeProduto);
    }

    public function remover($id){
        $produto = Produto::find($id);
        $produto->delete();
        //return redirect('/produtos'); // redireciona para request

        /*
            Redirecionamento para metodos
         */
        return redirect()->action('ProdutoController@listar');
    }

    public function editar($id){
        $produto = Produto::find($id);
        //return $produto->nome;
        return view('produto/formulario')->with('produto', $produto);
    }

    public function update(Request $request){
        //$params = $request->all();
        //rrturn $param;
        $produto = Produto::find($request->id);
        $produto->nome = $request->nome;
        $produto->quantidade = $request->quantidade;
        $produto->descricao = $request->descricao;
        $produto->tamanho = $request->tamanho;
        $produto->save();

        return redirect()->action('ProdutoController@listar')->withInput(['atualiza' => $produto->nome]);
    }
}


