@props(['type' => 'success', 'message' => ''])

@php
    $warna = match ($type) {
        'error'   => ['garis' => '#c62828', 'latar' => '#fdecea', 'teks' => '#c62828'],
        'warning' => ['garis' => '#ef6c00', 'latar' => '#fff4e5', 'teks' => '#ef6c00'],
        default   => ['garis' => '#2e7d32', 'latar' => '#e8f5e9', 'teks' => '#2e7d32'],
    };
@endphp

<div {{ $attributes->merge(['style' => 'padding:14px 16px;border-radius:10px;margin-bottom:18px;border:1px solid '.$warna['garis'].';background:'.$warna['latar'].';color:'.$warna['teks'].';']) }}>
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>
