@extends('layouts.favorit')
@section('favorit')
    <div class="favorit">
        <div class="background text-center">
            <div class="row align-item-center pt-2">
                <div class="col pt-5">
                    <h1 class="judul-section mt-5">Favorit Saya</h1>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-3">
                    <div class="card border-0" style="width: 18rem;">
                        <img src="/source/img/detail-sepatu-2.png" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Jordan 1 Low Shadow Toe</p>
                            <p class="card-harga">IDR 2.850.000</p>
                            <button href="#" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Hapus</button>
                            <a href="/detail-barang-4"><button class="btn btn-blue">Beli</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0" style="width: 18rem;">
                        <img src="/source/img/Shein-bag2.png" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Mini Twist Lock Geometric Bag</p>
                            <p class="card-harga">IDR 350.000</p>
                            <button href="#" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Hapus</button>
                            <a href="/detail-barang-2"><button class="btn btn-blue">Beli</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0" style="width: 18rem;">
                        <img src="/source/img/Shein-bag1.png" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Quilted Twist Lock Flap Bag</p>
                            <p class="card-harga">IDR 750.000</p>
                            <button href="#" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Hapus</button>
                            <a href="/detail-barang-1"><button class="btn btn-blue">Beli</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Modal hapus --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah anda ingin menghapus barang?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Barang akan hilang dari daftar favorit apabila dihapus
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endsection
