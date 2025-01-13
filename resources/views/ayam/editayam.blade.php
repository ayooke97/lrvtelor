<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Edit Data Ayam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Data Ayam</h2>

        <form action="{{ route('ayam.updateayam', $ayam->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_ayam" class="form-label">Nama Ayam</label>
                <input type="text" class="form-control" id="nama_ayam" name="nama_ayam" value="{{ $ayam->nama_ayam }}" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur (tahun)</label>
                <input type="number" class="form-control" id="umur" name="umur" value="{{ $ayam->umur }}" min="0" required>
            </div>
            <div class="mb-3">
                <label for="kriteria" class="form-label">Kriteria</label>
                <textarea class="form-control" id="kriteria" name="kriteria" rows="3" required>{{ $ayam->kriteria }}</textarea>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $ayam->jumlah }}" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
            <a href="{{ route('ayam.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
