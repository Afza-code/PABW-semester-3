@extends('layouts.ta')

@section('title', 'Input Laporan Warga')

@section('content')
    <div class="container" style="margin:0 auto;">
        <div class="header">
            <div class="icon-wrapper">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
            </div>
            <h1>Form Laporan Warga</h1>
            <p>Silakan lengkapi data laporan warga di bawah ini.</p>
        </div>

        <form action="{{ route('ta.store') }}" method="post" id="reportForm">
            @csrf

            <div class="form-group floating-group">
                <input type="text" id="nama" name="nama" class="floating-input" placeholder=" " value="{{ old('nama') }}" required>
                <label for="nama" class="floating-label">Nama Pelapor</label>
                <div class="input-line"></div>
            </div>

            <div class="form-group floating-group">
                <input type="text" id="lokasi" name="lokasi" class="floating-input" placeholder=" " value="{{ old('lokasi') }}" required>
                <label for="lokasi" class="floating-label">Lokasi</label>
                <div class="input-line"></div>
            </div>

            <div class="form-group floating-group">
                <input type="text" id="keterangan" name="keterangan" class="floating-input" placeholder=" " value="{{ old('keterangan') }}" required>
                <label for="keterangan" class="floating-label">Keterangan</label>
                <div class="input-line"></div>
            </div>

            <div class="form-group floating-group">
                <input type="text" id="jenis" name="jenis" list="pilihan-lapor" class="floating-input" placeholder=" " value="{{ old('jenis') }}" required>
                <label for="jenis" class="floating-label">Jenis Laporan (Ketik atau Pilih)</label>
                <datalist id="pilihan-lapor">
                    <option value="Laporan"></option>
                    <option value="Aspirasi"></option>
                </datalist>
                <div class="input-line"></div>
            </div>

            <button type="submit" class="btn-primary">
                <span>Kirim Laporan</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
            </button>
        </form>
    </div>
@endsection
