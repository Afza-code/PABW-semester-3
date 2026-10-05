<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') | LaporBanjir</title>
    <style>
        :root{
            --primary:#1565c0;
            --primary-dark:#0d47a1;
            --primary-light:#e3f2fd;
            --danger:#c62828;
            --warning:#ef6c00;
            --success:#2e7d32;
            --text:#212529;
            --muted:#6c757d;
            --border:#dee2e6;
            --bg:#f4f7fb;
        }
        *{box-sizing:border-box;}
        body{font-family:'Segoe UI',Tahoma,Arial,sans-serif;margin:0;background:var(--bg);color:var(--text);line-height:1.6;}
        header.site{background:linear-gradient(135deg,var(--primary),var(--primary-dark));color:#fff;}
        header.site .inner{max-width:960px;margin:0 auto;padding:18px 20px 0;}
        header.site .brand{display:flex;align-items:center;gap:12px;}
        header.site .brand .logo{width:48px;height:48px;border-radius:12px;background:rgba(255,255,255,.18);display:flex;align-items:center;justify-content:center;font-size:24px;}
        header.site h1{font-size:1.4rem;margin:0;letter-spacing:.5px;}
        header.site .tagline{font-size:.8rem;opacity:.9;margin:0;}
        nav.main{max-width:960px;margin:14px auto 0;padding:0 20px;display:flex;gap:8px;flex-wrap:wrap;}
        nav.main a{color:#fff;text-decoration:none;padding:9px 18px;border-radius:9px 9px 0 0;font-size:.92rem;font-weight:600;background:rgba(255,255,255,.12);}
        nav.main a.active,nav.main a:hover{background:var(--bg);color:var(--primary-dark);}
        main{max-width:960px;margin:26px auto;padding:0 20px;min-height:55vh;}
        .card{background:#fff;border:1px solid var(--border);border-radius:14px;padding:22px;margin-bottom:18px;box-shadow:0 2px 10px rgba(21,101,192,.06);}
        h2.page-title{margin-top:0;color:var(--primary-dark);}
        label{display:block;font-weight:600;margin-bottom:6px;font-size:.9rem;}
        input[type=text],input[type=number],textarea{width:100%;padding:11px 13px;border:1px solid var(--border);border-radius:9px;font-size:.95rem;font-family:inherit;margin-bottom:16px;}
        input:focus,textarea:focus{outline:none;border-color:var(--primary);box-shadow:0 0 0 3px var(--primary-light);}
        .btn{display:inline-block;background:var(--primary);color:#fff;border:none;padding:12px 22px;border-radius:9px;font-size:.95rem;font-weight:600;cursor:pointer;text-decoration:none;}
        .btn:hover{background:var(--primary-dark);}
        .btn-secondary{background:#fff;color:var(--primary-dark);border:1px solid var(--primary);}
        .btn-secondary:hover{background:var(--primary-light);}
        .badge{display:inline-block;padding:3px 11px;border-radius:999px;font-size:.78rem;font-weight:700;color:#fff;}
        .badge.waspada{background:var(--success);}
        .badge.siaga{background:var(--warning);}
        .badge.awas{background:var(--danger);}
        .data-list dt{font-weight:600;color:var(--muted);font-size:.8rem;text-transform:uppercase;letter-spacing:.04em;}
        .data-list dd{margin:0 0 14px;font-size:1.05rem;}
        footer.site{background:#0d2a4d;color:#c9d6e8;text-align:center;padding:18px;font-size:.85rem;margin-top:40px;}
        .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px;}
        .empty{color:var(--muted);font-style:italic;}
        .error{color:var(--danger);font-size:.85rem;margin:-10px 0 12px;}
    </style>
</head>
<body>
    <header class="site">
        <div class="inner">
            <div class="brand">
                <div class="logo">&#127754;</div>
                <div>
                    <h1>LaporBanjir</h1>
                    <p class="tagline">BPBD Kabupaten Bandung &mdash; Sistem Pelaporan Banjir</p>
                </div>
            </div>
        </div>
        <nav class="main">
            <a href="{{ route('laporan.create') }}" class="{{ request()->routeIs('laporan.create') ? 'active' : '' }}">Form Pelaporan</a>
            <a href="{{ route('laporan.index') }}" class="{{ request()->routeIs('laporan.index') ? 'active' : '' }}">Daftar Laporan</a>
            <a href="{{ route('ta.form') }}" class="{{ request()->routeIs('ta.*') ? 'active' : '' }}">Laporan Warga (TA)</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site">
        <p>&copy; {{ date('Y') }} LaporBanjir &mdash; Badan Penanggulangan Bencana Daerah Kabupaten Bandung</p>
    </footer>
</body>
</html>
