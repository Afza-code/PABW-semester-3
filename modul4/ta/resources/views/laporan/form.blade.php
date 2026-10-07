@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')

<h2>Form Pelaporan Banjir</h2>

<div>
    <p>Silahkan isi form Pelaporan banjir</p>

    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf

        <label for="nama_pelapor">Nama Pelapor</label>
        <input type="text" id="nama_pelapor" name="nama_pelapor" required>

        <label for="lokasi">Lokasi Kejadian</label>
        <input type="text" id="lokasi" name="lokasi" required>

        <label for="tinggi_genangan">Tinggi Genangan Air (cm)</label>
        <input type="number" id="tinggi_genangan" name="tinggi_genangan" required>

        <label for="tanggal_kejadian">Tanggal Kejadian</label>
        <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" required>

        <button type="submit" class="btn">Kirim Laporan</button>
    </form>
</div>

@endsection
