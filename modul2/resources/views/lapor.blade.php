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
    <style>
        /* Tambahan styling khusus untuk input file agar lebih estetik */
        .file-input-wrapper {
            position: relative;
            margin-bottom: 1.75rem;
        }
        
        .file-input-label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        .file-upload-box {
            border: 2px dashed #cbd5e1;
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            background: rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .file-upload-box:hover, .file-upload-box:focus-within {
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.9);
        }

        input[type="file"] {
            width: 100%;
            font-family: inherit;
            color: var(--text-main);
            font-size: 0.9rem;
        }
        
        input[type="file"]::file-selector-button {
            padding: 0.5rem 1rem;
            border-radius: 8px;
            border: none;
            background: var(--primary-light);
            color: var(--primary-hover);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-right: 1rem;
            font-family: inherit;
        }

        input[type="file"]::file-selector-button:hover {
            background: var(--primary);
            color: white;
        }
    </style>
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
            <h1>Form Pelaporan</h1>
            <p>Silakan lengkapi data laporan warga di bawah ini.</p>
        </div>

        <form action="tampil" method="post" enctype="multipart/form-data" id="reportForm">
            @csrf
            
            <div class="form-group floating-group">
                <input type="text" id="nama" name="nama" class="floating-input" placeholder=" " required>
                <label for="nama" class="floating-label">Nama Pelapor</label>
                <div class="input-line"></div>
            </div>

            <div class="form-group floating-group">
                <input type="text" id="lokasi" name="lokasi" class="floating-input" placeholder=" " required>
                <label for="lokasi" class="floating-label">Lokasi</label>
                <div class="input-line"></div>
            </div>

            <div class="form-group floating-group">
                <input type="text" id="keterangan" name="keterangan" class="floating-input" placeholder=" " required>
                <label for="keterangan" class="floating-label">Keterangan</label>
                <div class="input-line"></div>
            </div>

            <div class="form-group floating-group">
                <input type="text" id="jenis" name="jenis" list="pilihan-lapor" class="floating-input" placeholder=" " required>
                <label for="jenis" class="floating-label">Jenis Laporan (Ketik atau Pilih)</label>
                <datalist id="pilihan-lapor">
                    <option value="Laporan"></option>
                    <option value="Aspirasi"></option>
                </datalist>
                <div class="input-line"></div>
            </div>

            <div class="file-input-wrapper">
                <label class="file-input-label">Unggah File / Bukti</label>
                <div class="file-upload-box">
                    <input type="file" name="file" required>
                </div>
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