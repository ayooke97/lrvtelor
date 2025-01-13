<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('images/b.png') }}">
        <title>Login - PT. Semesta Mitra Sejahtera</title>
        <style>
            /* CSS styles */
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                background: url("{{ asset('images/c.jpg') }}") no-repeat center center fixed;
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .background-blur {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(255, 255, 255, 0.3);
                backdrop-filter: blur(5px);
                z-index: -1;
            }

            .login-container {
                background: rgba(255, 255, 255, 0.8);
                backdrop-filter: blur(5px);
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                width: 100%;
                max-width: 400px;
                text-align: center;
                position: relative;
                z-index: 1;
            }

            .login-container h2 {
                margin-bottom: 20px;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                color: #333;
            }

            .login-container input {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }

            .login-container button {
                width: 100%;
                padding: 10px;
                background-color: darkslategrey;
                color: #fff;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .login-container button:hover {
                background-color: #007BFF;
            }

            .login-container .footer-text {
                margin-top: 15px;
                font-size: 14px;
                color: #666;
            }

            .login-container .footer-text a {
                color: #007BFF;
                text-decoration: none;
            }

            .login-container .footer-text a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="background-blur"></div>
        <div class="login-container">
            <h2>Silahkan Masuk</h2>
            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                @if($errors->any())
                    <div class="error-messages">
                        @foreach ($errors->all() as $error)
                            <p style="color: red;">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </form>

            <div class="footer-text">
                <p>Kembali ke halaman <a href="{{ route('landing') }}">Home</a></p>
            </div>
        </div>
    </body>
</html>
