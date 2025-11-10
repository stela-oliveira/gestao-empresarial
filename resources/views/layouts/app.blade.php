<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestão Empresarial')</title>
    @vite('resources/css/app.css')
</head>
<body>

    @include('partials.navbar')

    <main class="container mt-4">
        @yield('content')
    </main>

    @include('partials.footer')

    @vite('resources/js/app.js')
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>