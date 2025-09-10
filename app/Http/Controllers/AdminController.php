<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.admin.clientes.index');
    }

    public function clientesShow($id)
    {
        return view('pages.admin.clientes.show', ['id' => $id]);
    }

    public function fornecedores()
    {
        return view('pages.admin.fornecedores.index');
    }

    public function produtos()
    {
        return view('pages.admin.produtos.index');
    }

    public function produtosShow($slug)
    {
        return view('pages.admin.produtos.show', ['slug' => $slug]);
    }
}