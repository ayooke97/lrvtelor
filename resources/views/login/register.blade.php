<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 500px; /* Lebar kontainer */
            margin-top: 250px; /* Jarak dari atas layar */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333; /* Ganti warna teks agar terlihat jelas */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            vertical-align: top; /* Agar label dan input rata atas */
        }

        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            background-color: olivedrab;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #5a5a5a;
        }
        .back-button {
            background-color:#5a5a5a;
            width: 100%;
            color: white;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Menghilangkan garis bawah */
            display: inline-block;
        }
        .alert {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Register</h2> <!-- Pastikan ini dapat dilihat -->

        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <td><label for="NIP">NIP</label></td>
                    <td><input type="text" name="NIP" class="form-control" value="{{ old('NIP') }}" required></td>
                </tr>
                <tr>
                    <td><label for="Nama">Nama</label></td>
                    <td><input type="text" name="Nama" class="form-control" value="{{ old('Nama') }}" required></td>
                </tr>
                <tr>
                    <td><label for="Tempat">Tempat Lahir</label></td>
                    <td><input type="text" name="Tempat" class="form-control" value="{{ old('Tempat') }}" required></td>
                </tr>
                <tr>
                    <td><label for="Tanggal_Lahir">Tanggal Lahir</label></td>
                    <td><input type="date" name="Tanggal_Lahir" class="form-control" value="{{ old('Tanggal_Lahir') }}" required></td>
                </tr>
                <tr>
                    <td><label for="Jenis_Kelamin">Jenis Kelamin</label></td>
                    <td>
                        <select name="Jenis_Kelamin" class="form-control" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki" {{ old('Jenis_Kelamin') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="Perempuan" {{ old('Jenis_Kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="Agama">Agama</label></td>
                    <td><input type="text" name="Agama" class="form-control" value="{{ old('Agama') }}" required></td>
                </tr>
                <tr>
                    <td><label for="Status">Status</label></td>
                    <td><input type="text" name="Status" class="form-control" value="{{ old('Status') }}" required></td>
                </tr>
                <tr>
                    <td><label for="Alamat">Alamat</label></td>
                    <td><textarea name="Alamat" class="form-control" required>{{ old('Alamat') }}</textarea></td>
                </tr>
                <tr>
                    <td><label for="Posisi">Posisi</label></td>
                    <td><input type="text" name="Posisi" class="form-control" value="{{ old('Posisi') }}" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" class="form-control" value="{{ old('email') }}" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="password_confirmation">Konfirmasi Password</label></td>
                    <td><input type="password" name="password_confirmation" class="form-control" required></td>
                </tr>
            </table>

            <button type="submit" class="btn">Daftar</button>
            <button class="back-button" onclick="window.location.href='/datapekerja';">Kembali</button>
        </form>
    </div>

</body>
</html>
