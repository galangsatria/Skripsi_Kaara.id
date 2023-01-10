@extends('layouts.bantuan') {{-- ini memanggil file main yang di dalam layout --}}
@section('login')
    <div class="container">
        <div>
            <div style="text-align:center; margin-bottom: 20px; margin-top: 89px;">
                <div class="col-sm-12">
                    <h1 style="color:  #a977b2;">Pertanyaan Umum</h1>
                </div>
            </div>
        </div>

        <div>
            <div style="text-align:center;">
                <div class="col-sm-12">
                    <h3 style="color:  #bfbfbf;">Kami menyediakan beberapa pertanyaan umum yang biasa dialami oleh para
                        pengguna agar pengguna tidak kebingungan</h3>
                </div>
            </div>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Kak produk yang dibeliin Kaara original ga?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Temen-temen gausah khawatir, barang yang Kaara beliin pastinya 100% Original.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Kak, bisa payment setengah dulu ga ya? jadi full paymentnya kalo barang udah ready.
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Bisa banget dong! kalian bisa bayar dulu 50% untuk DP, ketika barang sudah ready di
                        Indonesia dan siap dikirim ke customer baru dilakukan pembayaran full payment.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Kak, untuk katalog bisa dilihat dimana ya?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Untuk katalog bisa diakses di Highlight Instagram Kaara.id ya.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Kak gimana caranya request barang dari web?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Temen-temen bisa request barang di banner yang bisa diakses di bagian bawah halaman koleksi.
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-start">
            <div class="col-4">
                <div class="card shadow-lg mt-4 mb-5">
                    <img src="/source/img/banner-bantuan.png" class="banner-bantuan" alt="">
                    <div class="card-img-overlay">
                        <h2 class="card-title">Tidak Menemukan Solusi?</h2>
                        <p class="card-text">Apabila ada pertanyaan yang tidak terjawab, hubungi kami!</p>
                        @if (Auth::check())
                            <a href="/contact"><button class="btn btn-1">Hubungi Kami</button></a>
                        @else
                            <a href="{{ route('loginform') }}"><button class="btn btn-1">Hubungi Kami</button></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
