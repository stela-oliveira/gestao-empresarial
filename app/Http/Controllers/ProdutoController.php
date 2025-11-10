<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\View\View;

class ProdutoController extends Controller
{
    public function index()
    {
        
        $produtos = Produto::all();
        return view('pages.produtos.index', compact('produtos'));
    }

    /**
     * poara exibit os detalhes de um único produto.
     * @param int|string $id O ID do produto.
     */
    public function show(string $id): View
    {
        $produto = Produto::findOrFail($id); 

        return view('pages.produtos.show', compact('produto'));
    }
}