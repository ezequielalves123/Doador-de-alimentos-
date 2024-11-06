<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index(){
        $produto = Produto::all();
        return view('produtos.index', ['produtos' => $produto]);
    }
    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        // dd($request->all());
        Produto::create([
            'nome'          => $request->nome,
            'custo'         => $request->custo,
            'preco'         => $request->preco,
            'quantidade'    => $request->quantidade,
        ]);

        return view('produtos.index');
    }

    public function show($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produtos' => $produto]);
    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produtos' => $produto]);
    }

    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome'          => $request->nome,
            'custo'         => $request->custo,
            'preco'         => $request->preco,
            'quantidade'    => $request->quantidade,    
        ]);

        return view('produtos.index');
    }

    public function delete($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produtos' => $produto]);
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        $produtos = Produto::all();

        return view('produtos.index', ['produtos' => $produtos]);
    }
}
