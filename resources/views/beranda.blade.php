@extends('layouts.beranda') {{-- ini memanggil file main yang di dalam layout --}}
@section('beranda')
    {{-- Section 1 --}}
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/source/img/poster-1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/source/img/poster-2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/source/img/poster-3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Section 2 --}}
    <!-- Slider main container -->
    <div class="container-fluid my-4">
        <h4 class="ms-3 mb-3">Rekomendasi Kami</h4>
        <div class="swiper mySwiper ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/detail-barang-1">
                    <div class="card">
                        <img src="/source/img/tas-shein.png" alt="">
                        <div class="card-text">Quilted Twist Lock Flap Bag</div>
                        <div class="card-title">IDR 750.000</div>
                    </div>
                    </a>
                
                </div>
                <div class="swiper-slide">
                    <a href="/detail-barang-2">
                    <div class="card">
                        <img src="/source/img/detail-tas-2.png" alt="">
                        <div class="card-text">Mini Twist Lock Geometric Bag</div>
                        <div class="card-title">IDR 350.000</div>
                    </div>
                </a>
                </div>
                <div class="swiper-slide">
                    <a href="/detail-barang-1">
                    <div class="card">
                        <img src="/source/img/tas-shein.png" alt="">
                        <div class="card-text">Mini Quilted Embossed Bag</div>
                        <div class="card-title">IDR 750.000</div>
                    </div>
                </a>
                </div>
                <div class="swiper-slide">
                    <a href="/detail-barang-2">
                    <div class="card">
                        <img src="/source/img/Shein-bag-4.png" alt="">
                        <div class="card-text">Mini Twist Lock Color Bag</div>
                        <div class="card-title">IDR 250.000</div>
                    </div>
                </a>
                </div>
                <div class="swiper-slide">
                    <a href="/detail-barang-2">
                    <div class="card">
                        <img src="/source/img/detail-tas-2.png" alt="">
                        <div class="card-text">Quilted Twist Lock Flap Bag</div>
                        <div class="card-title">IDR 750.000</div>
                    </div>
                </a>
                </div>
                <div class="swiper-slide">
                    <a href="/detail-barang-2">
                    <div class="card">
                        <img src="/source/img/tas-shein.png" alt="">
                        <div class="card-text">Mini Quilted Embossed Bag</div>
                        <div class="card-title">IDR 750.000</div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Section 3 --}}
    <section class="section-3">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-4">
                    <img src="/source/img/sec3.png" class="gambar-banner" alt="">
                </div>
                <div class="col-8 p-5 text-white">
                    <h1>#PakeKaaraAja</h1>
                    <h4>Kaara menyediakan banyak pilihan untuk kamu yang bingung pengen
                        keren tapi terjangkau. Kaara jamin semuanya 100% original!</h4>
                </div>
            </div>
        </div>
    </section>
    {{-- Section 4 --}}
    <div class="container-fluid my-4">
        <h4 class="ms-3 mb-3">Rekomendasi Kami</h4>
        <div class="swiper mySwiper ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/detail-barang-3">
                    <div class="card">
                        <img src="/source/img/sepatu-kenzo.png" alt="">
                        <div class="card-text">Espadrilles Elastic Tiger Head</div>
                        <div class="card-title">IDR 2.000.000</div>
                    </div>
                </a>
                </div>
                <div class="swiper-slide">
                    <a href="/detail-barang-4">
                    <div class="card">
                        <img src="/source/img/sepatu-adidas.png" alt="">
                        <div class="card-text">Adidas NMD Human Race Trail</div>
                        <div class="card-title">IDR 3.500.000</div>
                    </div>
                </a>
                </div>
                <div class="swiper-slide">
                    <a href="/detail-barang-3">
                    <div class="card">
                        <img src="/source/img/detail-sepatu-1.png" alt="">
                        <div class="card-text">Quilted Twist Lock Flap Bag</div>
                        <div class="card-title">IDR 750.000</div>
                    </div>
                </a>
                </div>
                <div class="swiper-slide">
                    <a href="/detail-barang-4">
                    <div class="card">
                        <img src="/source/img/detail-sepatu-2.png" alt="">
                        <div class="card-text">Jordan 1 Low Shadow Toe</div>
                        <div class="card-title">IDR 2.850.000</div>
                    </div>
                </a>
                </div>
                <div class="swiper-slide">
                    <a href="/detail-barang-3">
                    <div class="card">
                        <img src="/source/img/sepatu-vans.png" alt="">
                        <div class="card-text">VNS x SpongeBob Old Skool </div>
                        <div class="card-title">IDR 1.850.000</div>
                    </div>
                </a>
                </div>
                <div class="swiper-slide">
                    <a href="/detail-barang-3">
                    <div class="card">
                        <img src="/source/img/sepatu-2.png" alt="">
                        <div class="card-text">Vans SK8-Hi</div>
                        <div class="card-title">IDR 1.750.000</div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>

    <script type="module">
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        spaceBetween: 10,
        grabCursor: true,
        mousewheel: true,
        keyboard: true,
    });
      </script>
@endsection
