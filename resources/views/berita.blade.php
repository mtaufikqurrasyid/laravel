<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Berita Mahasiswa</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="/" class="navbar-brand">
                Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    @guest
                    <!-- Tampilkan tombol Login jika pengguna belum login -->
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                    @else
                    <!-- Tampilkan informasi pengguna dan tombol Logout jika pengguna sudah login -->
                    <li class="nav-item">
                        <span class="nav-link">{{ Auth::user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <h1 class="text-center">Berita Mahasiswa</h1>
        <hr>

        <!-- Daftar Berita -->
        <div class="row">
            <!-- Berita 1 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="{{('img/kampus2.jpg')}}" class="card-img-top" alt="Gambar Berita 1">
                    <div class="card-body">
                        <h5 class="card-title">Kampus kompeten</h5>
                        <p class="card-text">Mari Ngampus disini hehee</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="{{('img/kamps.jpg')}}" class="card-img-top" alt="Gambar Berita 2">
                    <div class="card-body">
                        <h5 class="card-title">Kampus terbengkalai</h5>
                        <p class="card-text">Kampus ini telah dilupakan oleh sejarah</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan Berita Lainnya di sini -->

        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


</html>