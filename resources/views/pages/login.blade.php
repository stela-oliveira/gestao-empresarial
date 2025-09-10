@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="card p-4">
        <h2 class="card-title text-center">Login</h2>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-warning">Entrar</button>
            </div>
        </form>
    </div>
@endsection