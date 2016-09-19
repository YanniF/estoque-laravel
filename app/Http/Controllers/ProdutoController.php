<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use estoque\Http\Requests;
use Illuminate\Support\Facades\DB;
use estoque\Produto;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{    
    public function __construct(Request $request) {
        //$this->middleware('auth', ['except' => ['/home', '/lala']]);
        $this->middleware('auth');
    }

    public function lista() {

    	/*$produtos = DB::select('SELECT * FROM produtos');

        if(view()->exists('produto.listagem')) {            
            return view('produto/listagem')->with('produtos', $produtos);
            return view('listagem', ['produtos' => $produtos]);
            return view('listagem')->withProdutos($produtos);//magic methods    
        }
        else {
            return view('welcome');
        }*/

        $produtos = Produto::all();
        return view('produto/listagem')->with('produtos', $produtos);
    }
    
    //?id=1
    public function mostra(Request $request) {
        
        /*$id = $request->route('id');
        $produto = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);*/
        
        if($request->has('id')) {//verifica se um parâmetro foi informado
            $id = $request->input('id');
            //$produto = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);
            $produto = Produto::find($id);
        }
        else {
            return "Informe um id.";
        }           
        
        if(empty($produto)) {
            return "Este produto não existe.";
        }
        return view('produto/detalhes')->with('p', $produto);
    }

    public function novo() {
        return view('produto/formulario');
    }

    
    public function adiciona(ProdutoRequest $req) {

        /*
        $nome = $req->input('nome');
        $desc = $req->input('descricao');
        $valor = $req->input('valor');
        $qtd = $req->input('quantidade');

        DB::insert('INSERT INTO produtos (nome, quantidade, valor, descricao) VALUES (?, ?, ?, ?)',
                    array($nome, $qtd, $valor, $desc));

        //return redirect('/produtos')->withInput();//envia tudo
        //return redirect('/produtos')->withInput($req->only('nome'));
        return redirect()->action('ProdutoController@lista')->withInput();*/

        //outra forma de fazer
        /*$params = $req->all();
        $produto = new Produto($params);
        $produto->save();*/

        //mais uma forma de fazer

        Produto::create($req->all());

        return redirect()->action('ProdutoController@lista')->withInput();
    }

    //passando com a barra /1
    public function remove($id) {
        
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->action('ProdutoController@lista'); 
    }

    //poderia ter usado o método mostrar, mas para deixar um exemplo de como fazer das maneiras vou usar esse
    public function editar($id) {
        
        $produto = Produto::find($id);

        return view('produto/atualiza')->with('p', $produto);
    }

    public function atualiza($id, Request $req) {
        
       $produto = Produto::findOrFail($id);
       $params = $req->all();
       $produto->fill($params)->save();

       return redirect()->action('ProdutoController@lista');
    }
}


/* exemplo
    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function checkText() {
       $txt = $this->request->has('txt'); 
       return $txt;
    }
*/