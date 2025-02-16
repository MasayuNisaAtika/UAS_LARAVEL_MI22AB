<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
</head>
<body>
    <div class ="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Tentang Kami</h1>
                <img src="{{ asset('img/asyifa.jpeg') }}" alt="Gambar Asyifa" width="125" height="100" style="object-fit:cover;">
                <div class="text">
                <p> NIM </p>
                <p> Nama Lengkap</p>
                <p>Kelas</p>
                <p>Kontribusi yang saya lakukan adalah</p>
                <p>Github saya</p>
            </div>
            </div>
        </div>
    </div>
    <div class ="container">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset('img/asyifa.jpeg') }}" alt="Gambar Asyifa" width="125" height="100" style="object-fit:cover;">
                <div class="text">
                <p> NIM </p>
                <p> Nama Lengkap</p>
                <p>Kelas</p>
                <p>Kontribusi yang saya lakukan adalah</p>
                <p>Github saya</p>
            </div>
            </div>
        </div>
    </div>

    <div class ="container">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset('img/asyifa.jpeg') }}" alt="Gambar Asyifa" width="125" height="100" style="object-fit:cover;">
                <div class="text">
                <p> NIM </p>
                <p> Nama Lengkap</p>
                <p>Kelas</p>
                <p>Kontribusi yang saya lakukan adalah</p>
                <p>Github saya</p>
            </div>
            </div>
        </div>
    </div>


    <div class ="container">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset('img/asyifa.jpeg') }}" alt="Gambar Asyifa" width="125" height="100" style="object-fit:cover;">
                <div class="text">
                <p> NIM </p>
                <p> Nama Lengkap</p>
                <p>Kelas</p>
                <p>Kontribusi yang saya lakukan adalah</p>
                <p>Github saya</p>
            </div>
            </div>
        </div>
    </div>


    <div class ="container">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset('img/asyifa.jpeg') }}" alt="Gambar Asyifa" width="125" height="100" style="object-fit:cover;">
                <div class="text">
                <p> NIM </p>
                <p> Nama Lengkap</p>
                <p>Kelas</p>
                <p>Kontribusi yang saya lakukan adalah</p>
                <p>Github saya</p>
            </div>
            </div>
        </div>
    </div>
    <a href="{{ route('katalog') }}">Kembali ke Home</a>


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 5000px;
            display: flex;
            align-items: center;
            gap: 20px; /* Jarak antara gambar dan teks */
        }
        .profile img {
            width: 125px;
            height: 100px;
            border-radius: 10px;
            object-fit: cover;
        }
        .text {
            flex: 1;
        }
        .text p {
            margin: 5px 0;
        }
        
        .back-link:hover {
            text-decoration: underline;
        }
    </style>

</body>
</html>

