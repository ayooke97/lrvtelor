<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. SMS</title>
    <link rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
        }

        /* Gambar latar belakang */
        .background {
            background: url("{{ asset('images/c.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1; /* Agar gambar latar belakang berada di belakang konten */
        }

        /* Overlay untuk blur */
        .background-blur {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.5); /* Warna overlay putih dengan transparansi */
            backdrop-filter: blur(1px); /* Mengatur tingkat blur */
            z-index: -1; /* Agar overlay berada di belakang konten */
        }

        /* Sidebar styles */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: olivedrab;
            color: black;
            padding: 20px;
            position: fixed;
            left: -250px; /* Mulai di luar layar */
            transition: left 0.3s; /* Animasi saat sidebar muncul */
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .sidebar ul {
            list-style-type: none;
            padding-left: 0;
        }

        .sidebar ul li {
            margin: 20px 0;
        }

        .sidebar ul li a {
            color: black;
            text-decoration: none;
            display: block;
            font-size: 18px;
            padding: 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #575757;
        }

        /* Tombol toggle */
        .toggle-button {
            position: fixed;
            left: 20px;
            top: 20px;
            background-color: olivedrab;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            color: white;
            font-size: 18px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="background"></div>
    <div class="background-blur"></div>

    <img src="{{ asset('images/b.png') }}" alt="Gambar 1">

    <button class="toggle-button" onclick="toggleSidebar()">☰</button> <!-- Tombol untuk membuka/menutup sidebar -->

    <div class="sidebar" id="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="/pekerja/pekerja">Home</a></li>
            <li><a href="/datapekerja">Data Pekerja</a></li>
            <li><a href="/pekerja/kandang">Manajemen Kandang</a></li>
            <li><a href="/pakan/pakan">Manajemen Pakan</a></li>
            <li><a href="/telur/produksi">Produksi Telur</a></li>
            <li><a href="/laporan/laporan">Laporan</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            if (sidebar.style.left === '0px') {
                sidebar.style.left = '-250px'; // Tutup sidebar
            } else {
                sidebar.style.left = '0px'; // Buka sidebar
            }
        }
    </script>
</body>
</html>
