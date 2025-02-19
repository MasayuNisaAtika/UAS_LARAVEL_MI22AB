<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: rgb(85, 85, 85);
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }

            .container {
                background-color: #fff;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
                width: 80%;
                height: 400px;
                text-align: left; 
                margin-right: 50px; 
                display: flex;
                justify-content: start;
                align-items: center;
            }

            .logo img {
                width: 550px; 
                margin-right: 80px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input {
                width: 150%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            select {
                width: 150%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            button {
                background-color: rgb(85, 85, 85);
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

            .error-message {
                color: red;
                font-size: 14px;
                margin-top: 5px;
            }
        </style>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('img/bg.jpg') }}" alt="Logo Anda">
            </div>
            <div class="form">
                <h2>Registrasi</h2>
                @if(session('success'))
                    <p style="color: green;">{{ session('success') }}</p>
                @endif
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" id="username" name="username" type="text" placeholder="Username" value="{{ old('username') }}" required />
                        @error('username')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="password" name="password" type="password" placeholder="Password" required />
                        @error('password')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="password_confirm" name="password_confirmation" type="password" placeholder="Confirm Password" required />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
                <div class="mt-3 text-center">
                    <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
