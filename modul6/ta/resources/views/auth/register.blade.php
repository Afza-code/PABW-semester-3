@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="auth-card">
    <div class="card">
        <h2 class="page-title">Register Petugas</h2>
        <p class="muted">Buat akun untuk mengakses halaman pengelolaan laporan.</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}"
                       required autocomplete="name" autofocus>
                @error('name')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                       required autocomplete="email">
                @error('email')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password"
                       required autocomplete="new-password">
                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" name="password_confirmation"
                       required autocomplete="new-password">
            </div>

            <button type="submit" class="btn btn-block">Register</button>
        </form>

        <p class="muted">Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>.</p>
    </div>
</div>
@endsection
