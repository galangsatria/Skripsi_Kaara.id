<!-- {{-- ini memanggil file main yang di dalam layout --}} -->
@extends('layouts.daftar')
@section('daftar')
<div class="container" style="padding-top: 80px; padding-left: 50px; margin-bottom:100px;">
    <div class="col-sm-4">
        <div class="row">
            <div>
                <h1 style="font-family: poppins; padding-bottom: 10px; font-weight:semi-bold;">Daftarkan Akun Anda</h1>
                <p style="padding-bottom: 30px; color:#bfbfbf">Temukan Pengalaman Berbelanjamu Disini</h6>
            </div>
            <form action="{{ route ('register') }}" method="POST">
                @csrf
            <div class="form-login">
                <label for="name" class="form-label"><b>Nama Lengkap</b></label>
                <input type="text" id="name" name="name" class="form-control"
                placeholder="Masukan Nama Lengkap">
            </div>
            <div class="form-login" style="padding-top: 10px;">
                <label for="username" class="form-label"><b>Email</b></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                placeholder="Masukan Email"
                value="{{ Session::get('verifiedEmail') ? Session::get('verifiedEmail') : old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-login" style="padding-top: 10px;">
                <label for="phone" class="form-label"><b>Nomor Telepon</b></label>
                <input type="string" id="phone" name="phone" class="form-control"
                placeholder="Masukan Nomor Telepon">
            </div>
            <div class="form-login" style="padding-top: 10px;">
                <label for="password" class="form-label"><b>Kata sandi</b></label>
                <input type="password" id="password" name="password" class="form-control"
                placeholder="Masukan Kata Sandi" aria-describedby="passwordHelpBlock">

            </div>

            <div class="form-login" style="padding-top: 10px;">
                <label for="password" class="form-label"><b>Konfirmasi Kata sandi</b></label>
                <input type="password" id="password_confirm" name="password_confirmation" class="form-control"
                placeholder="Konfirmasi Kata Sandi" aria-describedby="passwordHelpBlock">

            </div>
            
        </div>
        <div class="row" style="padding-top: 10px; margin-top: 25px">
            <div class="col-sm">

            </div>
            <button class="btn btn-2 ms-2" type="Submit">Daftar</button>
        </form>


            <br><br>
            <div style="padding-top: 1px;">
                <p>Sudah Memiliki Akun? <a href="/login" class="forgot ms-1"> Masuk</a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-8">
        <img src="/source/img/login.png" class="img-1" style="padding-left: 50px;">
    </div>
</div>
@endsection
