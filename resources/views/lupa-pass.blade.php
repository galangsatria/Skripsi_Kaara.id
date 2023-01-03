@extends('layouts.lupa-pass') {{-- ini memanggil file main yang di dalam layout --}}
@section('lupa-pass')
    <div class="container">
        <div class="col-sm-5">
            <div class="row">
                <div style="padding-top: 50px">
                    <h1 style="font-family: poppins;"><b>Lupa Kata Sandi </b></h1>
                    <h3 style="padding-bottom: 40px;">Tidak perlu khawatir, kamu bisa reset kata sandimu</h3>
                    <p style="color: #BFBFBF;">Silahkan masukan alamat email yang valid dan terdaftar</p>
                </div>
                <form class="card-form" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">
                            <h3>Email</h3>
                        </label>
                        <input type="text" class="form-control" id="email" placeholder="Masukan email terdaftar"
                            name="email">
                    </div>
                    <button type="submit" class="btn btn-5">Ubah Kata Sandi</button>
                </form>
            </div>
            <div style="padding-top: 60px;">
                <div>
                    <a href="/login" style="text-decoration: none;">
                        <h2 class="bi bi-arrow-left"> Kembali</h2>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-sm-7">
            <img src="/source/img/animasi-lupa.png" class="img-reset-1">
        </div>
    </div>
    </div>
@endsection
