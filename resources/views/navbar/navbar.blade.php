<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="{{ asset('images/b.png') }}">
        <title>PT. Semesta Mitra Sejahtera</title>
        <style>
            /* Navbar Style */
            nav {
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                display: flex;
                justify-content: center;
                background-color:darkslategrey;
                padding: 15px;
                position: relative;
                z-index: 1; /* Agar navbar berada di depan overlay */
            }
            nav a.active {
                color:coral;
            }
            nav a {
                text-decoration: none;
                color: white;
                margin: 0 15px;
            }

            nav a:hover {
                color: #007BFF; /* Ubah warna saat hover */
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav>
            <a href="{{ url('landing') }}" class="{{ Request::is('landing') ? 'active' : '' }}">Home</a>
            <a href="{{ url('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a>
            <a href="{{ url('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            <a href="{{ url('login') }}" class="{{ Request::is('login') ? 'active' : '' }}">Login</a>
        </nav>
    </body>
</html>
