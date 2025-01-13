<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="{{ asset('images/b.png') }}">
    <title>Halaman Awal</title>
    <style>
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
        /* Map styling */
        .map-container {
            margin-top: 20px;
            width: 100%;
            height: 400px;
            border: none;
        }
    </style>
</head>
<body>
    @include('navbar.sidebar')
    <div class="content">
        <h1>Welcome to the PT. Semesta Mitra Sejahtera's Website</h1>
        <p>Selamat datang di portal pekerja PT. Semesta Mitra Sejahtera. Di sini, Anda dapat mengelola informasi penting terkait operasional harian Anda, seperti manajemen kandang, pakan, produksi, dan laporan. Portal ini dirancang untuk memudahkan pekerjaan Anda dengan akses cepat dan mudah ke semua data yang diperlukan.</p>
        <P>Berikut merupakan alamat dari salah satu cabang PT. Semesta Mitra Sejahtera di Malang.</P>
        <!-- Google Maps Iframe -->
        <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63229.13102083335!2d112.61435147910156!3d-7.913791600000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62b97c707d95b%3A0x3ae5b08ab602e680!2sPT.%20Semesta%20Mitra%20Sejahtera%20(%20Malang%20)!5e0!3m2!1sen!2sid!4v1729856996762!5m2!1sen!2sid" width="900" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>
</html>
