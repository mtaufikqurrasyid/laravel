<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Buat file CSS terpisah untuk gaya tambahan -->
    <title>Homepage</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="/" class="navbar-brand">
                Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('biodata') }}" class="nav-link">Biodata</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('berita') }}" class="nav-link">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('profile_lulusan') }}" class="nav-link">Profile Lulusan</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('aktivitas_mahasiswa') }}" class="nav-link">Aktivitas Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-primary">Selamat Datang!</h1>
                <h4 class="text-secondary">
                    Di Perpustakaan Politeknik Negeri Bengkalis
                </h4>
                <p class="mt-3">Silahkan <a href="{{ route('auth.login')}}" class="text-decoration-none">Masuk</a> atau
                    <a href="{{ route('auth.register')}}" class="text-decoration-none">Daftar</a> jika Anda belum
                    memiliki akun.
                </p>
            </div>
        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


</html>