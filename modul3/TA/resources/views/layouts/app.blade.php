<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | BPBD Bandung</title>

    <style>
        body{font-family: Arial, Helvetica, sans-serif; margin: 20px;}
        header, footer{background: #f5f5f5; padding: 10px; text-align: center;}
        nav a {margin: 0 10px; text-decoration: none;}
        .card {border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 6px;}
        .btn {background: #007bff; color: white; padding: 8px 14px; border: none; border-radius: 4px; text-decoration: none; cursor: pointer;}
        .btn-secondary {background: #6c757d;}
        label {display: block; margin: 8px 0 4px;}
        input {padding: 6px; width: 300px;}
        .data-list dt {font-weight: bold; margin-top: 8px;}
        .data-list dd {margin: 0 0 4px;}
        .tandaWaspada {color: green;}
        .tandaSiaga {color: orange;}
        .tandaAwas {color: red;}
    </style>
</head>
<body>
    <header>
        <h1>Lapor Banjir</h1>
        <nav>
            <a href="{{ route('laporan.create') }}">Form Pelaporan</a>
            <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 praktikum laravel TA - Akmallutfi Afza Gusty</p>
    </footer>
</body>
</html>
