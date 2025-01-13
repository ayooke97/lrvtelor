<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Laporan Produksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        /* Main content styles */
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

        /* Table styles */
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

        /* Button styles */
        .add-button {
            background-color: #45a049;
            color: white;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .back-button {
            background-color: black;
            color: white;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .print-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .add-button:hover, .back-button:hover, .print-button:hover {
            background-color: #45a049;
        }

        /* Body background */
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    @include('navbar.sidebar')

    <div class="content">
        <h1>Laporan Produksi Ayam</h1>
        <p>Berikut adalah laporan terkait produksi telur yang dihasilkan oleh ayam-ayam di PT. Semesta Mitra Sejahtera</p>

        <!-- Form Pencarian dan Pengurutan -->
        <form action="{{ route('laporan.laporan') }}" method="GET" class="d-flex align-items-center gap-2 mb-4">
            <!-- Kolom Pencarian -->
            <input type="text" name="search" class="form-control w-25" placeholder="Cari laporan..." value="{{ request('search') }}">

            <!-- Kolom Pencarian Tanggal -->
            <input type="date" name="tglproduksi" class="form-control w-25" value="{{ request('tglproduksi') }}" placeholder="Tanggal Produksi">

            <!-- Tombol Cari -->
            <button type="submit" class="btn btn-primary">Cari</button>

            <!-- Tombol Sorting -->
            <div>
                <a href="{{ route('laporan.laporan', ['sort' => 'desc']) }}" class="btn btn-warning btn-sm" title="Urutkan Terbaru">
                    &#9650;
                </a>
                <a href="{{ route('laporan.laporan', ['sort' => 'asc']) }}" class="btn btn-warning btn-sm" title="Urutkan Terlama">
                    &#9660;
                </a>
            </div>
        </form>



        <table>
            <thead>
                <tr>
                    <th>Tanggal Produksi</th>
                    <th>Nama Kandang</th>
                    <th>Jumlah Ayam</th>
                    <th>Nama Ayam</th>
                    <th>Umur</th>
                    <th>Kesehatan</th>
                    <th>Jumlah Telur</th>
                    <th>Kualitas Telur</th>
                    <th>Berat Telur</th>
                    <th>Ukuran Telur</th>
                </tr>
            </thead>
            <tbody>
                @foreach($laporan as $item)
                    <tr>
                        <td>{{ $item->tglproduksi }}</td>
                        <td>{{ $item->nama_kandang }}</td>
                        <td>{{ $item->jumlah_ayam }}</td>
                        <td>{{ $item->nama_ayam }}</td>
                        <td>{{ $item->umur }}</td>
                        <td>{{ $item->kesehatan }}</td>
                        <td>{{ $item->jumlah_telur }}</td>
                        <td>{{ $item->kualitas_telur }}</td>
                        <td>{{ $item->berat_telur }}</td>
                        <td>{{ $item->ukuran_telur }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Tombol Kembali dan Cetak -->
        <div class="d-flex justify-content-between">
            <button class="back-button" onclick="window.location.href='/pekerja/kandang';">Kembali</button>
            <button class="print-button" onclick="window.print();">Cetak</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
