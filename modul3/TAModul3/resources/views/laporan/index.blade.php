@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2 class="page-title">Daftar Laporan Banjir</h2>
    <p>Berikut adalah laporan banjir terbaru yang diterima BPBD Kabupaten Bandung.
        Status genangan ditentukan dari tinggi genangan air.</p>

    <div class="grid">
        {{-- Directive perulangan + partial laporan-card --}}
        @forelse($laporans as $laporan)
            @include('partials.laporan-card', ['laporan' => $laporan])
        @empty
            <p class="empty">Belum ada laporan banjir yang masuk.</p>
        @endforelse
    </div>
@endsection
