<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Data Ayam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Data Ayam</h2>
        
        <!-- Tombol Tambah Data Ayam -->
        <div class="mb-3">
            <a href="{{ route('ayam.tambahayam') }}" class="btn btn-primary">Tambah Data Ayam</a>
            <a href="{{ route('kandang.datakandang') }}" class="btn btn-warning">Kembali ke Data Kandang</a>
        </div>

        <!-- Tabel Data Ayam -->
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Nama Ayam</th>
                    <th>Umur</th>
                    <th>Kesehatan</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ayam as $index => $a)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $a->nama_ayam }}</td>
                        <td>{{ $a->umur }}</td>
                        <td>{{ $a->kriteria }}</td>
                        <td>{{ $a->jumlah }}</td>
                        <td>
                            <a href="{{ route('ayam.editayam', $a->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('ayam.delete', $a->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
