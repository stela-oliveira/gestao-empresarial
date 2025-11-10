<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Support\Facades\Storage; // para upload de arquivos

class AdminController extends Controller
{
    public function login()
    {
        return view('pages.admin.login');
    }

    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }
    
    public function clientesIndex()
    {
        $clientes = Cliente::all(); 

        return view('pages.admin.clientes.index', compact('clientes'));
    }

    public function clientesShow($id)
    {
        $cliente = Cliente::findOrFail($id); 
        return view('pages.admin.clientes.show', compact('cliente'));
    }
    
      public function fornecedores()
    {
        return view('pages.admin.fornecedores.index');
    }

    public function produtos()
    {
        $produtos = Produto::all();
        return view('pages.admin.produtos.index', compact('produtos'));
    }

    public function produtosShow($id)
    {
        $produto = Produto::findOrFail($id); 

        return view('pages.admin.produtos.show', compact('produto'));
    }
    
    /**
     * formulário de criação de produto
     */
    public function produtoCreate()
    {
        return view('pages.admin.produtos.create');
    }

    /**
     * salvar o novo produto, incluindo o upload da imagem
     */
   public function produtoStore(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'imagem' => 'required|file|image|max:2048', 
        ]);

        $caminhoImagem = null;
        if ($request->hasFile('imagem')) {
            $caminhoImagem = $request->file('imagem')->store('products', 'public');
        }

        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'imagem' => $caminhoImagem,
        ]);

        return redirect()->route('admin.produtos') 
                         ->with('success', 'Produto cadastrado com sucesso!');
    }
}
