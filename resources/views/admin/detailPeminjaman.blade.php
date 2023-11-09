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

        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mt-4" style="width: 1250px">
                    <div class="card-body">
                        <h4 class="card-title text-center bold">Detail Peminjaman</h4>
                        <div class="text-center">
                            <img class="rounded mt-3 mb-4" style="width: 200px"
                                src="{{ asset('images/'.$detailPeminjaman->gambar) }}" alt="cover buku">
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2" class="text-center">Peminjaman</th>
                                    <th colspan="2" class="text-center">Buku</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-left">ID Peminjaman</th>
                                    <td><input class="form-control" type="text" value="{{$detailPeminjaman->id }}"
                                            disabled readonly></td>
                                    <th class="text-left">ID Buku</th>
                                    <td><input class="form-control" type="text" value="{{$detailPeminjaman->id_buku }}"
                                            disabled readonly></td>
                                </tr>
                                <tr>
                                    <th class="text-left">Tanggal Peminjaman</th>
                                    <td><input class="form-control" type="text"
                                            value="{{$detailPeminjaman->tanggal_pinjam }}" disabled readonly></td>
                                    <th class="text-left">Kode Buku</th>
                                    <td><input class="form-control" type="text"
                                            value="{{$detailPeminjaman->kode_buku }}" disabled readonly></td>
                                </tr>
                                <tr>
                                    <th class="text-left">Tanggal Pengembalian</th>
                                    <td><input class="form-control" type="text"
                                            value="{{$detailPeminjaman->tanggal_kembali }}" disabled readonly></td>
                                    <th class="text-left">Judul Buku</th>
                                    <td><input class="form-control" type="text"
                                            value="{{$detailPeminjaman->judul_buku }}" disabled readonly></td>
                                </tr>
                                <tr>
                                    <th class="text-left">Status Pengembalian</th>
                                    <td><input class="form-control" type="text" value="{{$detailPeminjaman->status }}"
                                            disabled readonly></td>
                                    <th class="text-left">Penulis</th>
                                    <td><input class="form-control" type="text" value="{{$detailPeminjaman->penulis }}"
                                            disabled readonly></td>
                                </tr>
                                <tr>
                                    <th class="text-left">ID Anggota</th>
                                    <td><input class="form-control" type="text" value="{{$detailPeminjaman->id_user }}"
                                            disabled readonly></td>
                                    <th class="text-left">Penerbit</th>
                                    <td><input class="form-control" type="text" value="{{$detailPeminjaman->penerbit }}"
                                            disabled readonly></td>
                                </tr>
                                <tr>
                                    <th class="text-left">Nama Anggota</th>
                                    <td><input class="form-control" type="text" value="{{$detailPeminjaman->name }}"
                                            disabled readonly></td>
                                    <th class="text-left">Tahun Terbit</th>
                                    <td><input class="form-control" type="text"
                                            value="{{$detailPeminjaman->tahun_terbit }}" disabled readonly></td>
                                </tr>
                                <tr>
                                    <th class="text-left">Email Anggota</th>
                                    <td><input class="form-control" type="text" value="{{$detailPeminjaman->email }}"
                                            disabled readonly></td>


                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
