<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'LaporBanjir') | LaporBanjir</title>

    <style>
        body{font-family: Arial, Helvetica, sans-serif; margin: 20px; color: #212529;}
        header, footer{background: #f5f5f5; padding: 10px; text-align: center;}
        nav a {margin: 0 10px; text-decoration: none; color: #007bff;}
        nav a:hover {text-decoration: underline;}
        .nav-user {margin-left: 10px; color: #6c757d; font-size: 14px;}
        .inline-form {display: inline; margin: 0;}
        .link-button {background: none; border: none; color: #007bff; cursor: pointer; font: inherit; padding: 0; margin: 0 10px; text-decoration: none;}
        .link-button:hover {text-decoration: underline;}
        main {max-width: 900px; margin: 0 auto;}
        .card {border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 6px;}
        .btn {background: #007bff; color: white; padding: 8px 14px; border: none; border-radius: 4px; text-decoration: none; cursor: pointer;}
        .btn:hover {background: #0069d9; color: white;}
        .btn-secondary {background: #6c757d;}
        .btn-secondary:hover {background: #5a6268;}
        .btn-block {width: 100%;}
        label {display: block; margin: 8px 0 4px; font-weight: bold;}
        input {padding: 6px; width: 300px; max-width: 100%; box-sizing: border-box;}
        input[type="checkbox"] {width: auto;}
        .form-group {margin-bottom: 14px;}
        .error-text {color: #dc3545; font-size: 14px; display: block; margin-top: 4px;}
        .alert {padding: 12px 15px; border-radius: 5px; margin: 12px 0;}
        .alert-success {background: #d4edda; border: 1px solid #c3e6cb; color: #155724;}
        .alert-danger {background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24;}
        .alert ul {margin: 0; padding-left: 20px;}
        .auth-card {max-width: 480px; margin: 20px auto;}
        .checkbox-label {display: inline; font-weight: normal; margin-left: 5px;}
        .page-title {margin-bottom: 4px;}
        .muted {color: #6c757d;}
        .profile-list dt {font-weight: bold; margin-top: 8px;}
        .profile-list dd {margin: 0 0 4px;}
        .stat {font-size: 32px; font-weight: bold; color: #007bff; margin: 5px 0;}
        .actions a {margin-right: 8px;}
        .data-list dt {font-weight: bold; margin-top: 8px;}
        .data-list dd {margin: 0 0 4px;}
        .tandaWaspada {color: green;}
        .tandaSiaga {color: orange;}
        .tandaAwas {color: red;}
    </style>
</head>
<body>
    <header>
        <h1>LaporBanjir</h1>
        <nav>
            <a href="{{ route('laporan.create') }}">Form Pelaporan</a>

            @auth
                <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
                <a href="{{ route('profile') }}">Profil Petugas</a>
                <form method="POST" action="{{ route('logout') }}" class="inline-form">
                    @csrf
                    <button type="submit" class="link-button">Logout</button>
                </form>
                <span class="nav-user">Masuk sebagai {{ Auth::user()->name }}</span>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </nav>
    </header>

    <main>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} LaporBanjir &mdash; Badan Penanggulangan Bencana Daerah Kabupaten Bandung</p>
    </footer>
</body>
</html>
