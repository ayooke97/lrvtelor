<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Detail Manajemen Kandang</title>
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
        .ayam {
            background-color:chocolate;
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

        .add-button:hover, .back-button:hover {
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
        <h1>Detail Manajemen Kandang</h1>
        <p>Berikut adalah data lengkap terkait manajemen kandang yang mencakup jumlah ayam, jenis ayam, kapasitas kandang, kondisi lingkungan, dan kesehatan ayam.</p>
        <div style="display: flex; justify-content: space-between;">
            <a href="{{ route('kandang.create') }}" class="add-button">Tambah Data</a>
            <a href="{{ route('ayam.index') }}" class="ayam">Ayam</a> <!-- Tambahkan tombol Ayam -->
        </div>

        <!-- Tabel Manajemen Kandang -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kandang</th>
                    <th>Kapasitas Kandang</th>
                    <th>Kondisi Kandang</th>
                    <th>Jumlah Ayam</th>
                    <th>Jenis Ayam</th>
                    <th>Kesehatan Ayam</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kandang as $index => $k)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $k->Nama }}</td>
                    <td>{{ $k->Kapasitas }}</td>
                    <td>{{ $k->Kondisi }}</td>
                    <td>{{ $k->Jumlah }}</td>
                    <td>{{ $k->ayam->nama_ayam }}</td> <!-- Mengakses langsung nama_ayam -->
                    <td>{{ $k->Kesehatan }}</td>
                    <td>
                        <a href="{{ route('kandang.edit', $k->id) }}" class="btn btn-warning">Ubah</a>
                    </td>
                    <td>
                        <form action="{{ route('kandang.destroy', $k->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

        <!-- Tombol Kembali -->
        <button class="back-button" onclick="window.location.href='/pekerja/kandang';">Kembali</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
