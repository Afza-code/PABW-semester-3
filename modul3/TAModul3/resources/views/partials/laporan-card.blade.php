<div class="card">
    <h3 style="margin:0 0 4px;">{{ $laporan['lokasi'] }}</h3>
    <p style="margin:0 0 10px;color:var(--muted);">Pelapor: {{ $laporan['nama'] }}</p>

    <p style="margin:0 0 4px;"><strong>Tinggi Genangan:</strong> {{ $laporan['tinggi'] }} cm</p>
    <p style="margin:0 0 12px;"><strong>Waktu Lapor:</strong> {{ $laporan['waktu'] }}</p>

    <p style="margin:0;"><strong>Status Genangan:</strong>
        @if($laporan['tinggi'] < 30)
            <span class="badge waspada">Waspada</span>
        @elseif($laporan['tinggi'] <= 70)
            <span class="badge siaga">Siaga</span>
        @else
            <span class="badge awas">Awas</span>
        @endif
    </p>
</div>
