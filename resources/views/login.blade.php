<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(img/bg.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: flex-end;
            margin: 0;
            padding: 0;
        }

        .login-form {
            background-color: #fff;
            padding: 40px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            width: 25vw;
            max-width: 500px;
            height: 100vh;
        }
        .login-container {
            text-align: center;
        }

        img {
            width: 200px;
            margin-bottom: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: rgb(85, 85, 85);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color:rgb(85, 85, 85);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            color: #666;
            text-decoration: none;
        }
        .tambah-btn {
            display: inline-block;
            padding: 10px 15px;
            background-color:rgb(85, 85, 85);
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.3s;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <div class="login-container">
            <img src="{{ asset('img/NAM.png') }}" alt="Logo Perusahaan">
        </div>
        <h2>LOGIN</h2>

        @if(session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>  
                <input id="username" name="username" type="text" placeholder="username" required value="{{ old('username') }}"/>
                @error('username')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Password" required />
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
            <button type="submit">LOGIN</button>
            <a href="{{ route('katalog') }}" class="tambah-btn">Kembali</a>
        </form>
    </div>
</body>
</html>
