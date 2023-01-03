@extends('layouts.detail-pemesanan')
@section('detail-pemesanan')
    <div class="detail-pemesanan">
        <div class="background text-center">
            <div class="row align-item-center pt-2">
                <div class="col pt-5">
                    <h1 class="judul-section mt-5">Detail Pemesanan</h1>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="card mb-5" style="background-color: #f4f5fa">
                <div class="card-body">
                    <div class="row">
                        <div class="d-flex border border-2 border-opacity-50 ms-2 my-3 rounded" style="width: 99%">
                            <div class="p-2 fw-bold">Alamat</div>
                            <a href="/ubah-informasi" class="ms-auto p-2">Ubah</a>
                        </div>
                        <p class="text-detail-pemesanan">Galang</p>
                        <p class="text-detail-pemesanan">Cimahi Utara no.16 RT 06 RW 09 Kelurahan Citeureup Cimahi Utara Kota Cimahi</p>
                    </div>
                    <div class="row justify-content-start">
                        <div class="d-flex border border-2 border-opacity-50 ms-2 my-3 rounded" style="width: 99%">
                            <div class="p-2 fw-bold">Rincian Pesanan</div>
                        </div>
                        <div class="d-flex">
                            <div class="p-2"><img src="/source/img/detail-sepatu-2.png" style="width: 50%"></div>
                            <div class="p-2">
                                <p class="rincian-pemesanan">Air Jordan 1 Low Shadow Toe</p>
                                <p class="rincian-pemesanan">10 US</p>
                            </div>
                            <div class="ms-auto p-2 fw-bold">IDR 2.500.000</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex border border-2 border-opacity-50 ms-2 my-3 rounded" style="width: 99%">
                            <div class="p-2 fw-bold">Metode Pengiriman</div>
                            <a href="/ubah-informasi" class="ms-auto p-2">Ubah</a>
                        </div>
                        <div class="d-flex">
                            <div class="p-2 text-detail-pemesanan">JNT</div>
                            <div class="p-2 ms-auto fw-bold">IDR 80.000</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex border border-2 border-opacity-50 ms-2 my-3 rounded" style="width: 99%">
                            <div class="p-2 fw-bold">Metode Pembayaran</div>
                            <a href="/ubah-informasi" class="ms-auto p-2">Ubah</a>
                        </div>
                        <div class="d-flex">
                            <div class="p-2 text-detail-pemesanan">BRI Virtual Account</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex border border-2 border-opacity-50 ms-2 my-3 rounded" style="width: 99%">
                            <div class="p-2 fw-bold">Rincian Pembayaran</div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="p-2 text-detail-pemesanan">Subtotal untuk produk</div>
                            <div class="p-2 ms-auto fw-bold">IDR 2.500.000</div>
                        </div>
                        <div class="d-flex">
                            <div class="p-2 text-detail-pemesanan">Subtotal untuk pengiriman</div>
                            <div class="p-2 ms-auto fw-bold">IDR 80.000</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex border border-2 border-opacity-50 ms-2 my-3 rounded" style="width: 99%">
                            <div class="p-2 fw-bold">Total Pembayaran</div>
                            <div class="p-2 ms-auto fw-bold">IDR 2.580.000</div>
                        </div>
                    </div>
                </div>
                <a href="/riwayat-pemesanan"><button class="btn btn-purple mb-4" style="width: 30%; color: white; margin-left: 450px">Buat Pesanan</button></a>
            </div>
        </div>
    </div>
@endsection
