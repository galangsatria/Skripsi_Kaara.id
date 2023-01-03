<!-- {{-- ini memanggil file main yang di dalam layout --}} -->
@extends('layouts.login') 
@section('login')
<div class="container" style="padding-top: 80px; padding-left: 50px;">
    <div class="col-sm-4">
        <div class="row">
            <div>
                <h1 style="font-family: poppins; padding-bottom: 10px; font-weight:semi-bold;">Masuk ke Kaara.id</h1>
                <p style="padding-bottom: 30px; color:#bfbfbf">Temukan Pengalaman Berbelanjamu Disini</h6>
            </div>
            <form action="{{ route ('login') }}" method="post">
                 @csrf

            <div class="form-login">
                <label for="username" class="form-label"><b>Email</b></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="username" 
                placeholder="Masukan email" 
                value="{{old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-login" style="padding-top: 10px;">
                <label for="password" class="form-label"><b>Kata sandi</b></label>
                <input type="password" id="inputPassword5" name="password" class="form-control" 
                placeholder="Masukan Kata Sandi" aria-describedby="passwordHelpBlock">
        
            </div>
            <a class="row justify-content-end mt-2 me-1" href="/lupa-sandi">Lupa Kata Sandi?</a>
        </div>
        <div class="row" style="padding-top: 10px;">
            <div class="col-sm">
                
            </div>
            <button class="btn btn-2 ms-2" type="submit">Masuk</button>
        </form>
        
            
            <br><br>
            <div style="padding-top: 1px;">
                <p>Belum Memiliki Akun? <a href="{{ route('register') }}" class="forgot ms-1"> Daftar</a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-8">
        <img src="/source/img/login.png" class="img-1" style="padding-left: 50px;">
    </div>
</div>
@endsection
