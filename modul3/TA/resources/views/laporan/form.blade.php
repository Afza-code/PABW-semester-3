@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')

<h2>Form Pelaporan Banjir</h2>

<div>
    <p>Silahkan isi form Pelaporan banjir</p>

    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf

        <label for="nama">Nama Pelapor</label>
        <input type="text" id="nama" name="nama" required>

        <label for="lokasi">Lokasi Kejadian</label>
        <input type="text" id="lokasi" name="lokasi" required>

        <label for="tinggi">Tinggi Genangan Air (cm)</label>
        <input type="number" id="tinggi" name="tinggi" required>

        <button type="submit" class="btn">Kirim Laporan</button>
    </form>
</div>

@endsection
