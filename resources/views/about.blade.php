<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="{{ asset('images/b.png') }}">
        <title>Tentang</title>
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
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                text-align: center;
                color: #333;
                margin-top: 5px;
            }

            h3 {
                text-align: center; /* Mengatur teks agar berada di tengah */
                color: #333;
                font-style: italic;
                max-width: 800px; /* Batas lebar agar tidak terlalu melebar */
                margin: 20px auto; /* Membuat h3 berada di tengah dengan margin otomatis */
                line-height: 1.6; /* Spasi antar baris agar lebih mudah dibaca */
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
        <h1>TENTANG</h1>
        <h3>
            PT. Semesta Mitra Sejahtera adalah perusahaan yang bergerak di bidang agro industri, dengan fokus pada produksi ayam petelur dan telur.
            <p>Sebagai bagian dari Group Charoen Pokphand Indonesia, PT. Semesta Mitra Sejahtera memiliki komitmen kuat untuk menyediakan produk berkualitas tinggi yang mampu memenuhi kebutuhan pangan dalam negeri.</p>
            <p>Dengan lokasi produksi yang tersebar di beberapa kota di Jawa Timur, perusahaan ini menerapkan teknologi modern dalam proses produksi untuk menjamin efisiensi dan kualitas hasil.</p>
            <p>Selain itu, PT. Semesta Mitra Sejahtera juga aktif dalam mengembangkan sistem informasi manajemen produksi yang terintegrasi, guna meningkatkan pengelolaan data dan proses operasional yang lebih baik.</p>
        </h3>
        <footer>
            <p>&copy; 2024 Copyright Magang-STIKI Malang. All rights reserved.</p>
        </footer>
    </body>
</html>
