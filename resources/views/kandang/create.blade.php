<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Tambah Data Kandang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tambah Data Kandang</h2>
        <form action="{{ route('kandang.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama Kandang</label>
                <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan nama kandang" required>
            </div>
            <div class="mb-3">
                <label for="Kapasitas" class="form-label">Kapasitas</label>
                <input type="number" class="form-control" id="Kapasitas" name="Kapasitas" min="1" placeholder="Masukkan kapasitas kandang" required>
            </div>
            <div class="mb-3">
                <label for="Kondisi" class="form-label">Kondisi</label>
                <select class="form-select" id="Kondisi" name="Kondisi" required>
                    <option value="">Pilih kondisi kandang</option>
                    <option value="Baik">Baik</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Kurang Baik">Kurang Baik</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Jumlah" class="form-label">Jumlah Ayam</label>
                <input type="number" class="form-control" id="Jumlah" name="Jumlah" min="0" placeholder="Masukkan jumlah ayam" required>
            </div>
            <div class="mb-3">
                <label for="nama_ayam" class="form-label">Jenis Ayam</label>
                <select class="form-select" id="nama_ayam" name="nama_ayam" required>
                    <option value="">Pilih jenis ayam</option>
                    @foreach($jenisAyam as $id => $jenis)
                        <option value="{{ $id }}">{{ $jenis }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="Kesehatan" class="form-label">Kesehatan Ayam</label>
                <select class="form-select" id="Kesehatan" name="Kesehatan" required>
                    <option value="">Pilih kesehatan ayam</option>
                    <option value="Sehat">Sehat</option>
                    <option value="Sakit">Sakit</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('kandang.datakandang') }}" class="btn btn-secondary">Batal</a>
        </form><br>
    </div>
</body>
</html>
