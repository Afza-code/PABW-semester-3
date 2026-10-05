<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Selamat datang di dashboard admin</h2>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Lokasi Banjir</th>
                        <th>Tinggi banjir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$nama}}</td>
                        <td>{{$lokasi}}</td>
                        <td><span class="badge {{ $tinggiAir > 1 ? 'danger' : '' }}">{{$tinggiAir}} meter</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div style="margin-top: 2rem; text-align: center;">
            <a href="/" style="color: var(--primary); text-decoration: none; font-weight: 600; font-size: 0.95rem;">&larr; Kembali ke Form</a>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>