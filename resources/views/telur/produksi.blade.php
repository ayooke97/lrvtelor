<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Produksi Telur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        .content {
            margin-left: 25px;
            padding: 20px;
            flex-grow: 1;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .content h1 {
            margin-bottom: 20px;
        }
        .content p {
            font-size: 18px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 18px;
            background-color: white;
        }
        table, th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .add-button, .back-button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            color: white;
        }
        .add-button {
            background-color: #45a049;
        }
        .back-button {
            background-color: black;
        }
        .add-button:hover, .back-button:hover {
            background-color: #45a049;
        }
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    @include('navbar.sidebar')
    <div class="content">
        <h1>Produksi Telur</h1>
        <p>Berikut adalah data lengkap terkait produksi telur yang mencakup jenis ayam, tanggal produksi, jumlah telur, kualitas, berat, dan ukuran telur.</p>

        <div style="display: flex; justify-content: space-between;">
            <a href="{{ route('telur.createtelur') }}" class="add-button">Tambah Data Telur</a>
        </div>

        <!-- Tabel Telur -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Ayam</th>
                    <th>Tanggal Produksi</th>
                    <th>Jumlah</th>
                    <th>Kualitas Telur</th>
                    <th>Berat (gr)</th>
                    <th>Ukuran (cm)</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($telur as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->ayam->nama_ayam ?? 'Tidak Diketahui' }}</td>
                        <td>{{ $item->tglproduksi }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->kualitas }}</td>
                        <td>{{ $item->berat }}</td>
                        <td>{{ $item->ukuran }}</td>
                        <td><a href="{{ route('telur.edittelur', $item->id) }}" class="btn btn-warning">Ubah</a></td>
                        <td>
                            <form action="{{ route('telur.destroytelur', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Tombol Kembali -->
        <button class="back-button" onclick="window.location.href='/pekerja/pekerja';">Kembali</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
