<!-- {{-- ini memanggil file main yang di dalam layout --}} -->
@extends('layouts.login') 
@section('login')
<div class="container" style="padding-top: 80px; padding-left: 50px; margin-bottom:100px;">
    <div class="col-sm-4">
        <div class="row">
            <div>
                <h1 style="font-family: poppins; padding-bottom: 10px; font-weight:semi-bold;">Daftarkan Akun Anda</h1>
                <p style="padding-bottom: 30px; color:#bfbfbf">Temukan Pengalaman Berbelanjamu Disini</h6>
            </div>
            <form action="{{ route ('register') }}" method="post">
                @csrf

            <div class="form-login">
                <label for="name" class="form-label"><b>Nama Lengkap</b></label>
                <input type="text" id="name" name="name" class="form-control" 
                placeholder="Masukan Nama Lengkap">
            </div>
            <div class="form-login" style="padding-top: 10px;">
                <label for="username" class="form-label"><b>Email</b></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="username" 
                placeholder="Masukan Email" value="{{old('email') }}">
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
                <input type="password" id="inputPassword5" name="password" class="form-control" 
                placeholder="Masukan Kata Sandi" aria-describedby="passwordHelpBlock">
        
            </div>

            <div class="form-login" style="padding-top: 10px;">
                <label for="password" class="form-label"><b>Konfirmasi Kata sandi</b></label>
                <input type="password" id="inputPassword5" name="confirmpassword" class="form-control" 
                placeholder="Konfirmasi Kata Sandi" aria-describedby="passwordHelpBlock">
        
            </div>
            <a class="row justify-content-end mt-2 me-1" href="/lupa-sandi">Lupa Kata Sandi?</a>
        </div>
        <div class="row" style="padding-top: 10px;">
            <div class="col-sm">
                
            </div>
            <button class="btn btn-2 ms-2" type="submit">Daftar</button>
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
