<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pelaporan Warga</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="background-elements">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
    </div>

    <div class="container">
        <div class="header">
            <div class="icon-wrapper">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
            </div>
            <h1>Pelaporan Bencana</h1>
            <p>Silakan isi data laporan dengan lengkap dan jelas.</p>
        </div>

        <form action="/dashboard" method="post" id="reportForm">
            @csrf
            
            <div class="form-group floating-group">
                <input type="text" id="nama" name="nama" class="floating-input" placeholder=" " required>
                <label for="nama" class="floating-label">Nama Pelapor</label>
                <div class="input-line"></div>
            </div>

            <div class="form-group floating-group">
                <input type="text" id="lokasi" name="lokasi" class="floating-input" placeholder=" " required>
                <label for="lokasi" class="floating-label">Lokasi Bencana (Banjir)</label>
                <div class="input-line"></div>
            </div>

            <div class="form-group floating-group">
                <input type="number" id="tinggiAir" name="tinggiAir" step="any" class="floating-input" placeholder=" " required>
                <label for="tinggiAir" class="floating-label">Tinggi Genangan Air (meter)</label>
                <div class="input-line"></div>
            </div>

            <button type="submit" class="btn-primary">
                <span>Kirim Laporan</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
            </button>
        </form>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>