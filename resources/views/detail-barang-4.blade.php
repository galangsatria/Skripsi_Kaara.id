@extends('layouts.detail-barang')
@section('detail-barang')
    <div class="container py-5">
        <div class="row ">
            <div class="col-5 mt-5">
                <div class="card" style="height: 100%">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/source/img/detail-sepatu-2.png" class="d-block gambar1 mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/source/img/detail-sepatu-2.png" class="d-block gambar1 mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/source/img/detail-sepatu-2.png" class="d-block gambar1 mx-auto" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="40" height="40"
                                fill="black" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="40" height="40"
                                fill="black" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-7 text-center">
                <h3>NIKE</h3>
                <h3>Air Jordan 1 Low Shadow Toe</h3>
                <h3>IDR 2.850.000</h3>
                <p class="deskripsi-barang">Lorem ipsum dolor sit amet consectetur. Quis urna mauris scelerisque bibendum arcu.
                    Diam eget cursus orci tristique interdum ullamcorper. Leo elit feugiat donec pulvinar id nunc.</p>
                <h6 class="text-start size">Size</h6>
                <div class="flex d-flex ">
                    <span class="ukuran px-1">9 US</span>
                    <span class="ukuran px-1">10 US</span>
                    <span class="ukuran px-1">11 US</span>
                </div>
                <div class="mt-5">
                    @if(Auth::check())
                    <a href="/keranjang-saya"><button class="btn btn-purple text-white" style="width: 45%">Tambahkan
                        ke Keranjang</button></a>
                    <a href="/favorit"><button class="btn btn-white" style="width: 45%; margin-left: 70px">Tambahkan ke Favorit</button></a>
                    @else
                    <a href="{{route('loginform')}}"><button class="btn btn-purple text-white" style="width: 45%">Tambahkan
                        ke Keranjang</button></a>
                    <a href="{{route('loginform')}}""><button class="btn btn-white" style="width: 45%; margin-left: 70px">Tambahkan ke Favorit</button></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
