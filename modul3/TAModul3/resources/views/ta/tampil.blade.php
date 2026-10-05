@extends('layouts.ta')

@section('title', 'Hasil Laporan Warga')

@section('content')
    <div class="container container-large" style="margin:0 auto;">
        <div class="header">
            <div class="avatar-wrapper">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            </div>
            <h1>Halo, <span class="highlight">{{ $laporan['nama'] }}</span>!</h1>
            <p>Berikut adalah status laporan yang Anda kirimkan.</p>
        </div>

        {{-- Komponen Blade untuk pesan sukses --}}
        <x-alert type="success" message="Laporan Anda berhasil dikirim dan sedang diproses oleh petugas desa." />

        <div class="card">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 60px;">No</th>
                            <th>Jenis Laporan</th>
                            <th>Lokasi</th>
                            <th>Keterangan</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @include('partials.ta-row', ['row' => $laporan, 'no' => 1])
                    </tbody>
                </table>
            </div>
        </div>

        <div class="actions">
            <a href="{{ route('ta.form') }}" class="btn-secondary">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                Kembali ke Form
            </a>
        </div>
    </div>
@endsection
