<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Edit Data Pekerja</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        .content {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        .btn-submit {
            background-color: orange;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-back {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h2>Edit Data Pekerja</h2>
        <form action="{{ route('pekerja.update', $pekerja->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="NIP">NIP</label>
                <input type="text" name="NIP" id="NIP" class="form-control" value="{{ $pekerja->NIP }}" required>
            </div>
            
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" class="form-control" value="{{ $pekerja->Nama }}" required>
            </div>
            
            <div class="form-group">
                <label for="Tempat">Tempat</label>
                <input type="text" name="Tempat" id="Tempat" class="form-control" value="{{ $pekerja->Tempat }}" required>
            </div>
            
            <div class="form-group">
                <label for="Tanggal_Lahir">Tanggal Lahir</label>
                <input type="date" name="Tanggal_Lahir" id="Tanggal_Lahir" class="form-control" value="{{ $pekerja->Tanggal_Lahir }}" required>
            </div>
            
            <div class="form-group">
                <label for="Jenis_Kelamin">Jenis Kelamin</label>
                <select name="Jenis_Kelamin" id="Jenis_Kelamin" class="form-control" required>
                    <option value="Laki-laki" {{ $pekerja->Jenis_Kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $pekerja->Jenis_Kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="Agama">Agama</label>
                <input type="text" name="Agama" id="Agama" class="form-control" value="{{ $pekerja->Agama }}" required>
            </div>
            
            <div class="form-group">
                <label for="Status">Status</label>
                <input type="text" name="Status" id="Status" class="form-control" value="{{ $pekerja->Status }}" required>
            </div>
            
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <textarea name="Alamat" id="Alamat" class="form-control" required>{{ $pekerja->Alamat }}</textarea>
            </div>
            
            <div class="form-group">
                <label for="Posisi">Posisi</label>
                <input type="text" name="Posisi" id="Posisi" class="form-control" value="{{ $pekerja->Posisi }}" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $pekerja->email }}" required>
            </div>
            
            <div class="form-group" style="margin-top: 20px;">
                <a href="{{ route('pekerja.datapekerja') }}" class="btn-back">Kembali</a>
                <button type="submit" class="btn-submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
