<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Edit Data Kandang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    @include('navbar.sidebar')
    <div class="container mt-5">
        <h2>Edit Data Kandang</h2>
        <form action="{{ route('kandang.update', $kandang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama Kandang</label>
                <input type="text" class="form-control" id="Nama" name="Nama" value="{{ $kandang->Nama }}" required>
            </div>
            <div class="mb-3">
                <label for="Kapasitas" class="form-label">Kapasitas</label>
                <input type="number" class="form-control" id="Kapasitas" name="Kapasitas" value="{{ $kandang->Kapasitas }}" required>
            </div>
            <div class="mb-3">
                <label for="Kondisi" class="form-label">Kondisi</label>
                <input type="text" class="form-control" id="Kondisi" name="Kondisi" value="{{ $kandang->Kondisi }}" required>
            </div>
            <div class="mb-3">
                <label for="Jumlah" class="form-label">Jumlah Ayam</label>
                <input type="number" class="form-control" id="Jumlah" name="Jumlah" value="{{ $kandang->Jumlah }}" required>
            </div>
            <div class="mb-3">
                <label for="Jenis" class="form-label">Jenis Ayam</label>
                <select class="form-select" id="nama_ayam" name="nama_ayam" required>
                    <option value="">Pilih jenis ayam</option>
                    @foreach($jenisAyam as $id => $nama_ayam)
                        <option value="{{ $id }}" {{ $kandang->ayam_id == $id ? 'selected' : '' }}>{{ $nama_ayam }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="Kesehatan" class="form-label">Kesehatan Ayam</label>
                <input type="text" class="form-control" id="Kesehatan" name="Kesehatan" value="{{ $kandang->Kesehatan }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('kandang.datakandang') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
