@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="auth-card">
    <div class="card">
        <h2 class="page-title">Login Petugas</h2>
        <p class="muted">Masuk untuk membuka halaman daftar laporan dan profil petugas.</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                       required autocomplete="email" autofocus>
                @error('email')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password"
                       required autocomplete="current-password">
                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                       {{ old('remember') ? 'checked' : '' }}>
                <label class="checkbox-label" for="remember">Remember Me</label>
            </div>

            <button type="submit" class="btn btn-block">Login</button>
        </form>

        <p class="muted">Belum punya akun? <a href="{{ route('register') }}">Register di sini</a>.</p>
    </div>
</div>
@endsection
