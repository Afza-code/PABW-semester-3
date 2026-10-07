@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
<h2>Daftar Laporan Banjir</h2>

@forelse($laporan as $item)
    @include('partials.laporan-card', ['laporan' => $item])
@empty
    <p>Belum ada laporan masuk.</p>
@endforelse
@endsection
