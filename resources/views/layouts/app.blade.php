<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'SIM') }}</title>
    @if (file_exists(public_path('build/assets/app.css')))
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    @endif
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="{{ route('dashboard') }}" style="color:white; font-weight:bold;">SIM</a>
            <span style="float:right; color:white;">
                @auth
                    {{ auth()->user()->name }} |
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="color:white;">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
                @else
                    <a href="{{ route('login') }}" style="color:white;">Login</a>
                @endauth
            </span>
        </div>
    </header>

    <main class="container">
        @if(session('success'))
            <div style="background:#d1fae5; padding:8px; margin-bottom:8px;">{{ session('success') }}</div>
        @endif
        @yield('content')
    </main>

    <script src="{{ asset('resources/js/app.js') }}"></script>
</body>
</html>
