@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <h2 class="page-title">Konfirmasi Laporan</h2>

    {{-- Komponen Blade: menampilkan pesan berhasil --}}
    <x-alert type="success" message="Laporan banjir Anda berhasil dikirim dan akan segera ditindaklanjuti." />

    <div class="card">
        <h3 style="margin-top:0;">Detail Laporan yang Dikirim</h3>

        <dl class="data-list">
            <dt>Nama Pelapor</dt>
            <dd>{{ $laporan['nama'] }}</dd>

            <dt>Lokasi Kejadian</dt>
            <dd>{{ $laporan['lokasi'] }}</dd>

            <dt>Tinggi Genangan Air</dt>
            <dd>{{ $laporan['tinggi'] }} cm</dd>

            <dt>Status Genangan</dt>
            <dd>
                @if($laporan['tinggi'] < 30)
                    <span class="badge waspada">Waspada</span>
                @elseif($laporan['tinggi'] <= 70)
                    <span class="badge siaga">Siaga</span>
                @else
                    <span class="badge awas">Awas</span>
                @endif
            </dd>
        </dl>

        <a href="{{ route('laporan.create') }}" class="btn btn-secondary">Kembali ke Form</a>
        <a href="{{ route('laporan.index') }}" class="btn">Lihat Daftar Laporan</a>
    </div>
@endsection
