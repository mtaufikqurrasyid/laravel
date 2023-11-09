<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cetak Data Peminjaman</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
    .logo {
        width: 100px;
        margin-right: 20px;
    }

    .header-text {
        font-size: 2rem;
    }
    </style>
</head>

<body>
    <table align="center">
        <tr>
            <td>
                <img src="{{ public_path('images/POLBENG.png') }}" alt="logoKopSurat" class="logo">
            </td>
            <td align="center">
                <font size="4">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN,</font><br>
                <font size="4">RISET DAN TEKNOLOGI</font><br>
                <font size="4">PERPUSTAKAAN POLITEKNIK NEGERI BENGKALIS</font><br>
                <font size="3">Jalan Bathin Alam, Sungai Alam, Bengkalis, Riau 28711</font><br>
                <font size="3">Telepon : (+62766) 24566, Fax: (+62766) 800 1000</font><br>
                <font size="2">Laman: http://www.polbeng.ac.id, Email: polbeng@polbeng.ac.id</font><br>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td style="width: 1000px">
                <hr>
            </td>
        </tr>
    </table>

    <div class="form-group">
        <p align="center" class=""><b>Laporan Data Peminjaman Buku Perpustakaan</b></p>
        <table class="table table-striped" align="center" rules="all" border="1" style="width: 95%">
            <tr>
                <th>No</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Nama Peminjam</th>
                <th>Nama Buku</th>
            </tr>
            @foreach ($data as $peminjam)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $peminjam->tanggal_pinjam }}</td>
                <td>{{ $peminjam->tanggal_kembali }}</td>
                <td>{{ $peminjam->name }}</td>
                <td>{{ $peminjam->judul_buku }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
