<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="{{ asset('images/b.png') }}">
        <title>Manajemen Kandang</title>
        <style>
            /* Main content styles */
            .content {
                margin-left: 150px;
                padding: 20px;
                flex-grow: 1;
            }

            .content h1 {
                margin-bottom: 20px;
            }

            .content p {
                font-size: 18px;
            }
            
            .content ul {
                font-size: 18px;
                margin-bottom: 20px;
            }

            /* Button styles */
            .content button {
                background-color: black; /* Warna hijau */
                color: white;
                padding: 15px 20px;
                text-align: center;
                font-size: 16px;
                margin-top: 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .content button:hover {
                background-color:olivedrab; /* Warna hijau lebih gelap saat hover */
            }
        </style>
    </head>
    <body>
        @include('navbar.sidebar')
        <div class="content">
            <h1>Manajemen Kandang Ayam</h1>
            <p>
                Selamat datang di portal Manajemen Kandang PT. Semesta Mitra Sejahtera. Di sini, Anda dapat memantau dan mengelola kondisi kandang secara menyeluruh untuk memastikan produktivitas dan kesehatan ayam tetap optimal. Fitur yang tersedia mencakup:
            </p><br>
            <ul>
                <li><strong>Jumlah Ayam:</strong> Menampilkan data total ayam yang ada di kandang secara real-time.</li>
                <li><strong>Jenis Ayam:</strong> Informasi lengkap tentang jenis ayam yang dipelihara.</li>
                <li><strong>Kapasitas Kandang:</strong> Kapasitas maksimal kandang dan pemanfaatannya, sehingga Anda dapat mengelola pengisian kandang secara efisien.</li>
                <li><strong>Kondisi Lingkungan:</strong> Pantau kondisi lingkungan kandang seperti suhu, kelembapan, dan sirkulasi udara untuk memastikan lingkungan tetap sesuai bagi pertumbuhan ayam.</li>
                <li><strong>Kesehatan Ayam:</strong> Pemantauan kesehatan ayam secara berkala, termasuk vaksinasi dan catatan penyakit, untuk mencegah penyebaran penyakit dan menjaga produktivitas.</li>
            </ul>
            <p>
                Dengan fitur-fitur ini, Anda dapat mengelola operasional kandang dengan lebih efisien dan memastikan kesejahteraan ayam terjaga secara optimal.
            </p>

            <!-- Tombol Selengkapnya -->
            <button onclick="window.location.href='/kandang/datakandang';">Selengkapnya</button>
        </div>
    </body>
</html>
