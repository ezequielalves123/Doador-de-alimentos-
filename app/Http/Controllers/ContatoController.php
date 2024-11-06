<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contato; // Alterar o modelo para 'Contato'

class ContatoController extends Controller // Alterar o nome do controlador para 'ContatoController'
{
    public function create()
    {
        return view('cadastrar');
    }
    
    public function index() {
        return view('cadastrar');
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required', // Alterar de 'nome_candidato' para 'nome'
            'email' => 'required|unique:contatos,email', // Adicionar validação para 'email'
            'mensagem' => 'required', // Adicionar validação para 'mensagem'
        ]);

        $contato = Contato::where('email', $request->email)->first(); // Alterar para verificar por 'email'
        
        if ($contato) {
            return redirect('/')->with('error', 'Contato já existe!'); // Alterar a mensagem para 'Contato'
        } else {
            Contato::create([
                'nome' => $request->nome, // Alterar para 'nome'
                'email' => $request->email, // Adicionar 'email'
                'mensagem' => $request->mensagem, // Adicionar 'mensagem'
            ]);
            return redirect('/')->with('success', 'Contato Criado com sucesso!'); // Alterar a mensagem para 'Contato'
        }
    }

    public function edit($id_do_contato) {
        $contato = Contato::findOrFail($id_do_contato);
        return view('editar_contato', ['contato' => $contato]); // Alterar para 'editar_contato'
    }

    public function update(Request $request, $id_do_contato) {
        $contato = Contato::findOrFail($id_do_contato);
        $contato->update([
            'nome' => $request->nome,
            'email' => $request->email, // Adicionar 'email'
            'mensagem' => $request->mensagem, // Adicionar 'mensagem'
        ]);
        return redirect('/listar-contatos'); // Alterar para 'listar-contatos'
    }

    public function destroy($id_do_contato) {
        $contato = Contato::findOrFail($id_do_contato);
        $contato->delete();
        return redirect('/listar-contatos'); // Alterar para 'listar-contatos'
    }

    public function show() {
        $contatos = Contato::all(); // Alterar para 'contatos'
        return view('listar_contatos', ['contatos' => $contatos]); // Alterar para 'listar_contatos'
    }
}