<div class="card">
    <h3>{{ $laporan['nama'] }}</h3>
    <p><strong>Lokasi:</strong> {{ $laporan['lokasi'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $laporan['tinggi'] }} cm</p>
    <p><strong>Waktu:</strong> {{ $laporan['waktu'] }}</p>

    @if($laporan['tinggi'] < 30)
        <p>Status: <span class="tandaWaspada">Waspada</span></p>
    @elseif($laporan['tinggi'] <= 70)
        <p>Status: <span class="tandaSiaga">Siaga</span></p>
    @else
        <p>Status: <span class="tandaAwas">Awas</span></p>
    @endif
</div>
