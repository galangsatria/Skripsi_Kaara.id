@extends('layouts.ganti-password')
@section('password')
    <div class="container p-5">
        <div class="card shadow-lg mx-auto">
            <div class="card-body">
                <h1 class="h1-psetting">Ubah Kata Sandi</h1>
                <p class="p-psetting">Kata sandi baru harus memiliki panjang setidaknya 6 karakter</p>
                <div class="form-change">
                    <label for="">
                        <h2 class="h2-psetting">Kata Sandi Lama</h2>
                    </label>
                    <input type="password" class="form-control" placeholder="Masukan Kata Sandi Lama">
                </div>
                <div class="form-change">
                    <label for="">
                        <h2 class="h2-psetting">Kata Sandi Baru</h2>
                    </label>
                    <input type="password" class="form-control" placeholder="Masukan Kata Sandi Baru">
                </div>
                <div class="form-change">
                    <label for="">
                        <h2 class="h2-psetting">Konfirmasi Kata Sandi Baru</h2>
                    </label>
                    <input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi Baru">
                </div>
                <div class="change-password">
                    <button class="btn btn-psetting" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ubah Kata
                        Sandi</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="/source/img/Vector.png" class="vector" alt="">
                    <h2 class="h2-modal">Kata Sandi Berhasil Diubah</h2>
                    <a href="/profile"><button class="btn btn-modal">Kembali ke Profile</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection