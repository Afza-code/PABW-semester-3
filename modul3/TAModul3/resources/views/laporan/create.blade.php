@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <h2 class="page-title">Form Pelaporan Banjir</h2>

    <div class="card">
        <p>Silakan isi data kejadian banjir di wilayah Anda. Laporan akan langsung diteruskan
            kepada petugas BPBD Kabupaten Bandung.</p>

        <form action="{{ route('laporan.store') }}" method="POST">
            @csrf

            <label for="nama">Nama Pelapor</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                   placeholder="Contoh: Akmallutfi Afza" required>
            @error('nama') <p class="error">{{ $message }}</p> @enderror

            <label for="lokasi">Lokasi Kejadian</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}"
                   placeholder="Contoh: Jl. Raya Soreang KM 10" required>
            @error('lokasi') <p class="error">{{ $message }}</p> @enderror

            <label for="tinggi">Tinggi Genangan Air (cm)</label>
            <input type="number" id="tinggi" name="tinggi" min="0" step="1"
                   value="{{ old('tinggi') }}" placeholder="Contoh: 45" required>
            @error('tinggi') <p class="error">{{ $message }}</p> @enderror

            <button type="submit" class="btn">Kirim Laporan</button>
        </form>
    </div>
@endsection
