<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Boostrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    {{-- Google Font --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

    {{-- my stylse --}}
    <link rel="stylesheet" href="{{ asset('source/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('source/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('source/css/beranda.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <title>Kaara.id</title>
</head>

<body class="h-screen d-flex" style="min-height: 100vh">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white"
        style="width: 280px; height: 100vh; background-color: #a977b2">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Kaara.id</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Home
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="/logout" class="btn btn-danger">Keluar</a>
        </div>
    </div>

    <div class="p-5 flex-grow-1">
        <h2>Tabel Request Barang</h2>
        <table class="table table-bordered table-hover text-center w-100">
            <thead class="table-secondary">
                <tr>
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Nomor Telepon</th>
                    <th>Kategori Barang</th>
                    <th>Nama Barang</th>
                    <th>Status</th>
                    <th class="col-md-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reqs as $key => $req)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $req->name }}</td>
                        <td>{{ $req->phone }}</td>
                        <td>{{ $req->kategori }}</td>
                        <td>{{ $req->nama_barang }}</td>
                        <td>{{ $req->status }}</td>
                        <td class="d-flex gap-4 w-full align-items-center justify-content-center">
                            <button data-bs-toggle="modal" data-bs-target="#diterimaModal" type="submit"
                                class="btn-primary btn">Terima</button>
                            <button data-bs-toggle="modal" data-bs-target="#selesaiModal" type="submit"
                                class="btn-success btn">Selesai</button>
                            <button data-bs-toggle="modal" data-bs-target="#ditolakModal" type="submit"
                                class="btn-danger btn">Tolak</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Keluhan User</h2>
        <table class="table table-bordered table-hover text-center">
            <thead class="table-warning">
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($feedback as $feed)
                    <tr>
                        <td>{{ $feed->name }}</td>
                        <td>{{ $feed->email }}</td>
                        <td>{{ $feed->phone }}</td>
                        <td>{{ $feed->pesan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

{{-- Modal selesai --}}
<div class="modal fade" id="selesaiModal" tabindex="-1" aria-labelledby="selesaiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="selesaiModalLabel">Apakah anda ingin menyelesaikan request ini?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Aksi tidak dapat dibatalkan
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <form method="post" action="/requests/{{ $req->id }}/Selesai">
                    @csrf
                    <button type="submit" class="btn-success btn">Ya</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal diterima --}}
<div class="modal fade" id="diterimaModal" tabindex="-1" aria-labelledby="diterimaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="diterimaModalLabel">Apakah anda ingin menyelesaikan request ini?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Aksi tidak dapat dibatalkan
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <form method="post" action="/requests/{{ $req->id }}/Diterima">
                    @csrf
                    <button type="submit" class="btn-success btn">Ya</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal ditolak --}}
<div class="modal fade" id="ditolakModal" tabindex="-1" aria-labelledby="ditolakModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ditolakModalLabel">Apakah anda ingin menyelesaikan request ini?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Aksi tidak dapat dibatalkan
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <form method="post" action="/requests/{{ $req->id }}/Ditolak">
                    @csrf
                    <button type="submit" class="btn-success btn">Ya</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
