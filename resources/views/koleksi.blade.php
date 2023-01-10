@extends('layouts.koleksi')
@section('koleksi')
    <div class="container-fluid my-4">
        <div id="koleksi" class="row justidy-content-evenly">
            <div class="col-lg-2">
                <div class="card" style="background-color: #f8f8f9">
                    <div class="card-body">
                        <div class="kategori-barang">
                            <h6 class="mb-3">Kategori Barang</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Tas</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Sepatu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Kemeja</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Lainnya</label>
                            </div>
                        </div>
                        <div class="gender">
                            <h6 class="mt-4 mb-3">Gender</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Pria</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Wanita</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Unisex</label>
                            </div>
                        </div>
                        <div class="harga">
                            <h6 class="mt-4 mb-3">Harga</h6>
                            <input class="harga" type="text" placeholder="Harga Minimum">
                            <input class="harga" type="text" placeholder="Harga Maksimum">
                            <button class="btn btn-filter mt-2 fw-bold">Filter</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 ps-4">
                <div class="row">
                    <div class="col-10">
                        <input type="text" class="cari-barang p-2" placeholder="Cari Barang">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-search">Search</button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3">
                        <a href="/detail-barang-1" class="link-barang">
                            <div class="card">
                                <img src="/source/img/Shein-bag1.png" class="img-koleksi" alt="">
                                <p class="card-text">Quilted Twist Lock Flap Bag</p>
                                <h5 class="card-title">IDR 750.000</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="/detail-barang-2" class="link-barang">
                            <div class="card">
                                <img src="/source/img/Shein-bag2.png" class="img-koleksi" alt="">
                                <p class="card-text">Quilted Twist Lock Flap Bag</p>
                                <h5 class="card-title">IDR 750.000</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="/detail-barang-3" class="link-barang">
                            <div class="card">
                                <img src="/source/img/detail-sepatu-1.png" class="img-koleksi" alt="">
                                <p class="card-text">Nike Dunk Low Two Tone Grey</p>
                                <h5 class="card-title">IDR 2.350.000</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="/detail-barang-4" class="link-barang">
                            <div class="card">
                                <img src="/source/img/detail-sepatu-2.png" class="img-koleksi" alt="">
                                <p class="card-text">Jordan 1 Low Shadow Toe</p>
                                <h5 class="card-title">IDR 2.850.000</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="banner-koleksi" class="col-lg-10 ms-auto">
            <div class="card" style="border-radius: 13px; width:100%">
                <img src="/source/img/banner-koleksi.png" class="foto-banner" alt="">
                <div class="card-body ps-5 pt-5" style="position: absolute;">
                    <h2 class="fw-bold" style="color: white">Tidak Menemukan Barang Yang Disukai?</h2>
                    <h6 class="mt-3 fs-6" style="color: white">
                        Kamu bisa request barang jasa titip loh, klik tombol di bawah ya!
                    </h6>
                    @if (Auth::check())
                        <a href="/request-barang"><button class="btn btn-dark">Request Barang</button></a>
                    @else
                        <a href="{{ route('loginform') }}"><button class="btn btn-dark">Request Barang</button></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
