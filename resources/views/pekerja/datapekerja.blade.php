<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Data Pekerja</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        /* Main content styles */
        .content {
            margin-left: 20px;
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
            font-size: 15px;
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
            background-color: orange;
            color: black;
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
        <h2>Data Pekerja</h2>
        <div style="display: flex; justify-content: space-between;">
            <b><a href="/register" class="add-button">Register</a></b>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tempat</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Alamat</th>
                    <th>Posisi</th>
                    <th>Email</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pekerja as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->NIP }}</td>
                    <td>{{ $p->Nama }}</td>
                    <td>{{ $p->Tempat }}</td>
                    <td>{{ \Carbon\Carbon::parse($p->Tanggal_Lahir)->format('d-m-Y') }}</td>
                    <td>{{ $p->Jenis_Kelamin }}</td>
                    <td>{{ $p->Agama }}</td>
                    <td>{{ $p->Status }}</td>
                    <td>{{ $p->Alamat }}</td>
                    <td>{{ $p->Posisi }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <a href="{{ route('pekerja.editpekerja', $p->id) }}" class="btn btn-warning">Ubah</a>
                    </td>
                    <td>
                        <form action="{{ route('pekerja.destroy', $p->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
