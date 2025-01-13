<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="{{ asset('images/b.png') }}">
        <title>PT. Semesta Mitra Sejahtera</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                overflow: hidden; /* Mencegah scrollbar muncul */
                font-family: Arial, sans-serif;
                display: flex;
                flex-direction: column; /* Mengatur arah flex ke kolom */
                min-height: 100vh;
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

            h1 {
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                text-align: center;
                color: #333;
                margin-top: 5px;
                font-size: 80px;
            }

            h3 {
                text-align: center;
                color: #333;
                font-style: italic;
            }

            img {
                display: block;
                margin: 5px auto;
                max-width: 100%;
                height: auto;
            }
            footer {
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                display: flex;
                justify-content: center;
                background-color: darkslategrey;
                padding: 10px;
                color: aliceblue;
                margin-top: auto; /* Menambahkan margin-top auto untuk memindahkan footer ke bawah */
            }
        </style>
    </head>
    <body>
    @include('navbar.navbar')
        <div class="background"></div>
        <div class="background-blur"></div>
        <img src="{{ asset('images/b.png') }}" alt="Gambar 1">
        <h1>PT. Semesta Mitra Sejahtera</h1>
        <h3>Cabang Kedungkandang - Malang</h3>
        <footer><p>&copy; 2024 Copyright Magang-STIKI Malang. All rights reserved.</p></footer>
    </body>
</html>
