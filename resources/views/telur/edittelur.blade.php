<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Edit Data Telur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Data Telur</h1>
        <form action="{{ route('telur.updatetelur', $telur->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Jenis Ayam:</label>
                <select name="ayam_id" class="form-select" required>
                    @foreach($ayam as $a)
                        <option value="{{ $a->id }}" {{ $a->id == $telur->ayam_id ? 'selected' : '' }}>{{ $a->nama_ayam }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Tanggal Produksi:</label>
                <input type="date" name="tglproduksi" class="form-control" value="{{ $telur->tglproduksi }}" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Jumlah:</label>
                <input type="number" name="jumlah" class="form-control" value="{{ $telur->jumlah }}" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Kualitas Telur:</label>
                <input type="text" name="kualitas" class="form-control" value="{{ $telur->kualitas }}" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Berat (gr):</label>
                <input type="number" name="berat" class="form-control" value="{{ $telur->berat }}" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Ukuran:</label>
                <input type="text" name="ukuran" class="form-control" value="{{ $telur->ukuran }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('telur.produksi') }}" class="btn btn-secondary">Kembali</a>
        </form><br>
    </div>
</body>
</html>
