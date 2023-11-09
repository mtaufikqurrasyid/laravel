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

        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex justify-content-center">{!! $chart->container() !!}

                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{ route('admin.peminjaman') }}" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Cari id peminjam"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
        <div class="row mt-5">
            <div class="col"><a class="btn btn-info text-white" target="_blank"
                    href="{{ route('admin.cetakDataPeminjaman') }}" style="text-decoration: none; margin-right: 30px"><i
                        class=" fas fa-print"></i></a></div>
            <div class="col"></div>
            <div class="col-2">
                <a class="btn btn-success" href="{{ route('admin.tambahPeminjaman') }}"
                    style="text-decoration: none; margin-left: 30px">Tambah Data <i class="fas fa-plus"></i></a>
            </div>
        </div>
        <table class="table" style="margin-top: 10px">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor Anggota</th>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">Status Peminjaman</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($data as $index => $peminjam)
                <tr>
                    <td scope="row">{{ $index + $data->firstItem() }}</td>
                    <td>{{ $peminjam->id_user }}</td>
                    <td>{{ $peminjam->id_buku }}</td>
                    <td>{{ $peminjam->tanggal_pinjam }}</td>
                    <td>{{ $peminjam->tanggal_kembali }}</td>
                    <td>
                        <span
                            class="{{ $peminjam->status === 'Sudah Dikembalikan' ? 'fw-semibold text-success' : 'fw-semibold text-danger' }}">
                            {{ $peminjam->status }}
                        </span>
                    </td>
                    <td>
                        <a class="btn btn-outline-primary"
                            href="/admin/detailPeminjaman/{{ $peminjam->id}}/{{ $peminjam->id_user }}/{{ $peminjam->id_buku }}">Detail</a>
                        <a class="btn btn-outline-warning" href="/admin/editPeminjaman/{{ $peminjam->id }}">Edit</a>
                        <a class="btn btn-outline-danger" href="/admin/deletePeminjaman/{{ $peminjam->id }}"><i
                                class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table><br>



        {{ $data->links() }}
    </div iv iv><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
</body>

</html>