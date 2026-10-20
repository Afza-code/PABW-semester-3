@extends('layouts.app')

@section('title', 'Profil Petugas')

@section('content')
<div class="auth-card">
    <div class="card">
        <h2 class="page-title">Profil Petugas</h2>
        <p class="muted">Data akun petugas yang sedang login.</p>

        <dl class="profile-list">
            <dt>Nama</dt>
            <dd>{{ Auth::user()->name }}</dd>

            <dt>Email</dt>
            <dd>{{ Auth::user()->email }}</dd>

            <dt>Waktu Pembuatan Akun</dt>
            <dd>{{ Auth::user()->created_at->diffForHumans() }}
                ({{ Auth::user()->created_at->format('d-m-Y H:i') }})</dd>
        </dl>
    </div>
</div>
@endsection
