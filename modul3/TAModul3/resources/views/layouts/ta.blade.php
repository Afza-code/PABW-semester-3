<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DesaKita') | Laporan Warga</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Penyesuaian layout Tugas Akhir agar memakai header, navigasi, dan footer */
        body.ta-body { display: block; padding: 0; align-items: initial; }
        .ta-topbar {
            position: relative; z-index: 20;
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--surface-border);
            box-shadow: var(--shadow-sm);
        }
        .ta-topbar-inner {
            max-width: 1000px; margin: 0 auto; padding: 1rem 2rem;
            display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;
        }
        .ta-brand { display: flex; align-items: center; gap: .75rem; font-weight: 700; color: var(--secondary); font-size: 1.15rem; }
        .ta-brand .ta-logo {
            width: 42px; height: 42px; border-radius: 14px;
            background: linear-gradient(135deg, var(--primary), #818cf8);
            color: #fff; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;
            box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.3);
        }
        .ta-brand small { display: block; font-weight: 400; font-size: .75rem; color: var(--text-muted); }
        .ta-nav { display: flex; gap: .5rem; flex-wrap: wrap; }
        .ta-nav a {
            text-decoration: none; font-weight: 600; font-size: .9rem;
            color: var(--text-muted); padding: .55rem 1.1rem; border-radius: 10px; transition: all .2s ease;
        }
        .ta-nav a:hover { background: var(--primary-light); color: var(--primary-hover); }
        .ta-nav a.active { background: var(--primary); color: #fff; box-shadow: var(--shadow-sm); }
        .ta-wrap { position: relative; z-index: 10; max-width: 1000px; margin: 0 auto; padding: 2.5rem 2rem; min-height: 60vh; }
        .ta-footer { position: relative; z-index: 10; text-align: center; padding: 1.5rem; color: var(--text-muted); font-size: .85rem; }
        .ta-page-title { font-size: 1.6rem; font-weight: 700; color: var(--secondary); margin-bottom: .35rem; letter-spacing: -.02em; }
        .ta-page-sub { color: var(--text-muted); margin-bottom: 1.75rem; }
        .ta-alert {
            padding: 1rem 1.25rem; border-radius: 12px; margin-bottom: 1.5rem; font-weight: 500;
            border: 1px solid var(--success); background: var(--success-bg); color: var(--success-text);
        }
        .ta-badge { display: inline-flex; align-items: center; gap: .375rem; padding: .375rem .875rem; border-radius: 9999px; font-size: .8rem; font-weight: 600; }
        .ta-badge.diterima { background: var(--success-bg); color: var(--success-text); }
        .ta-badge.proses { background: #fef3c7; color: #92400e; }
    </style>
</head>
<body class="ta-body">
    <div class="background-elements">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
    </div>

    <header class="ta-topbar">
        <div class="ta-topbar-inner">
            <div class="ta-brand">
                <div class="ta-logo">&#128220;</div>
                <div>
                    DesaKita
                    <small>Laporan Warga &mdash; Tugas Akhir</small>
                </div>
            </div>
            <nav class="ta-nav">
                <a href="{{ route('ta.form') }}" class="{{ request()->routeIs('ta.form') ? 'active' : '' }}">Input Laporan</a>
                <a href="{{ route('ta.dashboard') }}" class="{{ request()->routeIs('ta.dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('laporan.index') }}" class="">LaporBanjir</a>
            </nav>
        </div>
    </header>

    <main class="ta-wrap">
        @yield('content')
    </main>

    <footer class="ta-footer">
        <p>&copy; {{ date('Y') }} DesaKita &mdash; Pengembangan Aplikasi Berbasis Web</p>
    </footer>
</body>
</html>
