<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: rgb(85, 85, 85);
            color: white;
            height: 100vh;
            padding: 20px;
        }
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 10px;
        }
        .sidebar a:hover {
            background-color:rgb(168, 165, 163);
        }
        .content {
            flex: 1;
            padding: 20px;
        }
            /* Menata logo dan nama kantin */
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 100px; /* Sesuaikan ukuran logo */
            height: auto;
        }

        .nama {
            font-size: 18px;
            font-weight: bold;
            color: white;
            margin-top: 10px;
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo-container">
            <img src="../img/NAM.png" alt="Logo Kantin" class="logo">
            <h2 class="nama">NAM<sup>2</sup></h2>
            <h2 class="nama">T SHIRT STORE</h2>
        </div>
        <a href="{{ route('dashboard') }}">Beranda</a>
        <a href="{{ route('produk.index') }}">Produk</a>
        <a href="{{ route('kategori.index') }}">Kategori</a>
        <a href="{{ route('katalog') }}">Keluar</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
