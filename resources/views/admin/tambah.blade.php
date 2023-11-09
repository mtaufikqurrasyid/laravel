<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="sidebar">
        <a href="{{ route('admin.home') }}" class="d-flex align-items-center">
            <i class="fas fa-house me-2"></i> Home
        </a>
        <a href="{{ route('admin.berita') }}" class="d-flex align-items-center">
            <i class="fas fa-newspaper me-2"></i> Berita
        </a>
        <a href="{{ route('admin.datadosen') }}" class="d-flex align-items-center">
            <i class="fas fa-users me-2"></i> Data
        </a>
        <a href="{{ route('admin.buku') }}" class="d-flex align-items-center">
            <i class="fas fa-book me-2"></i> Buku
        </a>
        <a href="{{ route('admin.peminjaman') }}" class="d-flex align-items-center">
            <i class="fas fa-handshake me-2"></i> Peminjaman
        </a>
        <a href="{{ route('admin.aktivitas') }}" class="d-flex align-items-center">
            <i class="fas fa-tasks me-2"></i> Aktivitas
        </a>
        <a href="{{ route('admin.lulusan') }}" class="d-flex align-items-center">
            <i class="fas fa-graduation-cap me-2"></i> Lulusan
        </a>
        <a class="mt-lg-5 mt-5" href="{{ route('logout') }}" class="d-flex align-items-center">
            <i class="fas fa-sign-out-alt me-2"></i> Logout
        </a>
    </div>



    <div class="content">
        <div class="adminbck rounded px-3 py-2">
            <h1 class="text-white font-weight-bolder">Selamat Datang!</h1>
            <h5 class="text-white">{{ Auth::user()->name }}</h5>
        </div>

        @if (Session::get('success'))
        <br>
        <div class="alert alert-success">
            <strong>Success!</strong> {{ Session::get('success') }}
        </div>
        @endif
        @if (Session::get('failed'))
        <br>
        <div class="alert alert-danger">
            <strong>Failed!</strong> {{ Session::get('failed') }}
        </div>
        @endif
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mt-4" style="width: 800px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tambah Data</h5>
                        <form action="{{ route('postTambahAdmin') }}" method="POST">
                            @csrf
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Nama Admin</label>
                                <input type="text" class="form-control border border-secondary form-control" name="name"
                                    required value="{{ old('name') }}">
                                <span class="text-danger">
                                    @error('name')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Email Admin</label>
                                <input type="email" class="form-control border border-secondary form-control"
                                    name="email" required value="{{ old('email') }}">
                                <span class="text-danger">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary">Pilih Jenis
                                    Kelamin</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenisKelamin" value="Laki-laki">
                                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenisKelamin" value="Perempuan">
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                </div>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Password Admin</label>
                                <input type="password" class="form-control border border-secondary form-control"
                                    name="password" required>
                                <span class="text-danger">
                                    @error('password')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Konfirmasi Password Admin</label>
                                <input type="password" class="form-control border border-secondary form-control"
                                    name="password_confirmation" required>
                                <span class="text-danger">
                                    @error('password_confirmation')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <button type="submit" class="btn btn-success mt-5">Tambah Data Admin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>


       
 </d iv>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>