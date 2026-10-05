@extends('layouts.ta')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="container container-large" style="margin:0 auto;">
        <h2 class="ta-page-title">Dashboard Admin</h2>
        <p class="ta-page-sub">Selamat datang di dashboard admin. Berikut adalah seluruh laporan warga yang masuk.</p>

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
                        {{-- Directive perulangan + partial baris tabel --}}
                        @forelse($dataWarga as $item)
                            @include('partials.ta-row', ['row' => $item, 'no' => $loop->iteration])
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Belum ada data laporan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
