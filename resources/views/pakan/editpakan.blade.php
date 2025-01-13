<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Edit Data Pakan</title>
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
        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #45a049;
            border: none;
        }
        .btn-primary:hover {
            background-color: #3d8a40;
        }
        .back-button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            background-color: black;
            display: inline-block;
            margin-top: 20px;
        }
        .back-button:hover {
            background-color: #333333;
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
        <h1>Edit Data Pakan</h1>
        <form action="{{ route('pakan.update', $pakan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama Kandang</label>
                <select name="kandang_id" class="form-control">
                    @foreach($kandang as $k)
                        <option value="{{ $k->id }}" {{ $pakan->kandang_id == $k->id ? 'selected' : '' }}>{{ $k->Nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Nama Pakan</label>
                <input type="text" name="nama_pakan" class="form-control" value="{{ $pakan->nama_pakan }}" required>
            </div>
            <div class="form-group">
                <label>Komposisi</label>
                <input type="text" name="komposisi" class="form-control" value="{{ $pakan->komposisi }}" required>
            </div>
            <div class="form-group">
                <label>Tanggal Masuk</label>
                <input type="date" name="tglmasuk" class="form-control" value="{{ $pakan->tglmasuk }}" required>
            </div>
            <div class="form-group">
                <label>Tanggal Keluar</label>
                <input type="date" name="tglkeluar" class="form-control" value="{{ $pakan->tglkeluar }}" required>
            </div>
            <div class="form-group">
                <label>Total</label>
                <input type="number" name="total" class="form-control" value="{{ $pakan->total }}" required>
            </div>
            <div class="form-group">
                <label>Kebutuhan</label>
                <input type="number" name="kebutuhan" class="form-control" value="{{ $pakan->kebutuhan }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/pakan/pakan" class="back-button">Kembali</a>
        </form>
    </div>
</body>
</html>
