<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{

    public function index()
    {
        return view('pages.home');
    }

    public function sobre()
    {
        return view('pages.sobre');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function cadastro()
    {
        return view('pages.cadastro');
    }

    public function store(Request $request)
    {
        // pra alidação dos dados
        $dadosValidados = $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            
            'cpf' => [
                'required',
                'string',
                'max:14',
                Rule::unique('clientes', 'cpf') 
            ],
            
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('clientes', 'email')
            ],

            'cep' => 'required|string|max:9',
            'logradouro' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'uf' => 'required|string|size:2',
        ]);

        $cliente = Cliente::create($dadosValidados);

        return redirect()->route('login')
                         ->with('success', 'Cadastro realizado com sucesso! Por favor, faça o login.');
    }
}