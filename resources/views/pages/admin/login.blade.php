@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card p-5" style="width: 25rem;">
            <h2 class="card-title text-center mb-4">Área Administrativa</h2>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="d-grid gap-2 mt-4">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-warning">Acessar Painel</a>
                </div>
            </form>
        </div>
    </div>
@endsection