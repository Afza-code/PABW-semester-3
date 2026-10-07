@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
<h2>Konfirmasi Laporan</h2>

<x-alert type="success" message="Laporan berhasil dikirim." />

<div>
    <h3>Detail laporan yang di kirim</h3>

    <dl class="data-list">
        <dt>Nama Pelapor</dt>
        <dd>{{ $laporan->nama_pelapor }}</dd>

        <dt>Lokasi Kejadian</dt>
        <dd>{{ $laporan->lokasi }}</dd>

        <dt>Tinggi Genangan Air</dt>
        <dd>{{ $laporan->tinggi_genangan }} cm</dd>

        <dt>Tanggal Kejadian</dt>
        <dd>{{ $laporan->tanggal_kejadian }}</dd>

        <dt>Status Genangan</dt>
        <dd>
            @if($laporan->tinggi_genangan < 30)
                <span class="tandaWaspada">Waspada</span>
            @elseif($laporan->tinggi_genangan <= 70)
                <span class="tandaSiaga">Siaga</span>
            @else
                <span class="tandaAwas">Awas</span>
            @endif
        </dd>
    </dl>

    <a href="{{ route('laporan.create') }}" class="btn btn-secondary">Kembali ke Form</a>
    <a href="{{ route('laporan.index') }}" class="btn">Lihat Daftar Laporan</a>
</div>

@endsection
