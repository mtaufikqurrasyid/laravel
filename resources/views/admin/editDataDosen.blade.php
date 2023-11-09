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
                        <h5 class="card-title text-center">Update Data Dosen</h5>
                        <form action="/postEditDataDosen/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Nama</label>
                                <input type="text" class="form-control border border-secondary form-control" name="nama"
                                    required value="{{ $data->nama }}">
                                <span class="text-danger">
                                    @error('nama')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Prodi</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="prodi" required value="{{ $data->prodi }}">
                                <span class="text-danger">
                                    @error('prodi')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Gambar</label>
                                <input class="form-control mb-2" placeholder="Nama file lama: {{ $data->gambar}}"
                                    disabled>
                                <input class="form-control" type="file" name="gambar">
                                <div class="form-text">Maksimal ukuran
                                    gambar cover buku 5MB
                                </div>
                                <img class="mt-3" style="width: 100px" src="{{ asset('/images/' . $data->gambar) }}"
                                    alt="gambar dosen">
                                <br><button type="submit" class="btn btn-success mt-5">Update Data</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
