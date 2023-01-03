<nav class="navbar navbar-expand-lg navbar-light bg-pearl-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img class="logo w-50 ms-4" src="/source/img/logo-navbar.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="menu  mx-4" aria-current="/" href="/">Beranda</a>
                <a class="menu  mx-4" href="/koleksi">Koleksi</a>
                <a class="menu  mx-4" href="/bantuan">Bantuan</a>
                <a class="menu  mx-4" href="/tentang-kami">Tentang Kami</a>
            </div>


            <ul>
                <!-- {{-- kalo udah login, tampilin ini --}} -->
                <!-- @auth -->
                    <li class="nav-item dropdown" style="list-style: none">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false" id="navbarDropdownMenuLink" style="color: white">
                            <img class="rounded-circle" src="{{ asset('/source/img/profile.png' . auth()->user()->image) }}" width="50"
                                height="50px">
                            <!-- {{-- {{ asset('storage/' . $event->image) }} --}} -->
                        </a>

                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
                            <!-- <li><a class="dropdown-item"> {{ auth()->user()->fullname }}</a></li> -->
                            <li><a class="dropdown-item" href="/profile">Profil</a></li>
                            <li><a class="dropdown-item" href="/keranjang-saya">Keranjang Saya</a></li>
                            <li><a class="dropdown-item" href="/riwayat-pemesanan">Riwayat Pemesanan</a></li>
                            <li><a class="dropdown-item" href="/riwayat-pembelian">Riwayat Pembelian</a></li>
                            <li><a class="dropdown-item" href="/favorit">Favorit Saya</a></li>
                            <li class="text-center ">
                                <form action="{{ ('logout') }}">
                                    <!-- @csrf -->
                                    <button type="submit" class="btn-logout"><i
                                            class="bi bi-door-open"></i>Keluar</button>
                                </form>
                            </li>
                        </ul>
                    </li>

                    <!-- {{-- kalo belum login, tampilkan logo login --}} -->
                <!-- @else -->
                    <div class="mx-3 mt-3">
                        <a href="/login"><button class="btn btn-purple px-5 fw-bolder text-white"
                                type="submit">Masuk</button>
                        </a>
                    </div>
                <!-- @endauth -->
            </ul>
        </div>
    </div>
</nav>
