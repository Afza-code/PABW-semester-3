<div class="card">
    <h3>{{ $laporan->nama_pelapor }}</h3>
    <p><strong>Lokasi:</strong> {{ $laporan->lokasi }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $laporan->tinggi_genangan }} cm</p>
    <p><strong>Tanggal Kejadian:</strong> {{ $laporan->tanggal_kejadian }}</p>

    @if($laporan->tinggi_genangan < 30)
        <p>Status: <span class="tandaWaspada">Waspada</span></p>
    @elseif($laporan->tinggi_genangan <= 70)
        <p>Status: <span class="tandaSiaga">Siaga</span></p>
    @else
        <p>Status: <span class="tandaAwas">Awas</span></p>
    @endif
</div>
