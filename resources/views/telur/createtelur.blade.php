<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Tambah Data Telur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Data Telur</h1>
        <form action="{{ route('telur.storetelur') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Jenis Ayam:</label>
                <select name="ayam_id" class="form-select" required>
                    <option value="">Pilih Ayam</option>
                    @foreach($ayam as $a)
                        <option value="{{ $a->id }}">{{ $a->nama_ayam }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Tanggal Produksi:</label>
                <input type="date" name="tglproduksi" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Jumlah Telur:</label>
                <input type="number" name="jumlah" class="form-control" placeholder="Jumlah telur yang dihasilkan" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Kualitas Telur:</label>
                <input type="text" name="kualitas" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Berat (gr):</label>
                <input type="number" name="berat" class="form-control" placeholder="Berat/gr"  required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Ukuran (cm):</label>
                <input type="text" name="ukuran" class="form-control" placeholder="Diameter" required>
            </div>
            
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('telur.produksi') }}" class="btn btn-secondary">Kembali</a>
        </form>
        <br>
    </div>
</body>
</html>
