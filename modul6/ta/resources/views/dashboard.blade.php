@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h2 class="page-title">Dashboard Petugas</h2>
<p class="muted">Anda berhasil login dan dapat mengakses halaman pengelolaan laporan.</p>

<div class="card">
    <p>Total laporan yang masuk:</p>
    <p class="stat">{{ $totalLaporan }}</p>
    <div class="actions">
        <a href="{{ route('laporan.index') }}" class="btn">Lihat Daftar Laporan</a>
        <a href="{{ route('laporan.create') }}" class="btn btn-secondary">Tambah Laporan Warga</a>
    </div>
</div>
@endsection
