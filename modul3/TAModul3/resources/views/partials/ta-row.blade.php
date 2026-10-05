<tr>
    <td class="text-center font-medium">{{ $no }}</td>
    <td class="font-medium">{{ $row['jenis'] }}</td>
    <td>
        <div class="flex-align">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-sm"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            {{ $row['lokasi'] }}
        </div>
    </td>
    <td>{{ $row['keterangan'] }}</td>
    <td class="text-center">
        @if(($row['tinggi'] ?? 0) > 1)
            <span class="ta-badge proses">Siaga</span>
        @else
            <span class="ta-badge diterima"><span class="pulse-dot"></span> Diterima</span>
        @endif
    </td>
</tr>
