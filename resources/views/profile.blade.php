@extends('layouts.profile') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
    <div class="row">
        <div class="col-sm-8">
            <div class="card shadow" style="background-color: #F3F4F8; border-radius: 20px;">
                <div class="card-left">
                    <h2 class="h2-profile">Informasi Pribadi</h2>
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-2">
                                    <div class="rounded mb-3 mb-md-0" style="padding-top: 28px;">
                                        <div class="image">
                                            <img class="rounded-circle img-preview img-fluid" src="/source/img/profile.png"
                                                width="120" height="120px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <h6 class="user">user@gmail.com</h6>
                                    <button class="btn btn-1">
                                        Unggah Foto
                                    </button>
                                    <h5 class="h5-pi">*Gambar bisa dalam format .jpg atau .png</h5>
                                </div>
                            </div>

                            <div class="row" style="padding-top: 44px;">
                                <div class="col-sm-6">
                                    <div class="form-login">
                                        <label for="#" class="form-label">
                                            <h6 class="h6-form">Nama Lengkap</h6>
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-login">
                                        <label for="#" class="form-label">
                                            <h6 class="h6-form">Nomor Telepon</h6>
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <label for="#" class="form-label">
                                        <h6 class="h6-form">Alamat</h6>
                                    </label>
                                    <textarea name="" id="" cols="100" rows="5" style="border-radius:10px;"></textarea>
                                </div>
                                <div class="col-sm-12" style="text-align: center;">
                                    <button type="submit" class="btn btn-3">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card shadow" style="background-color: #F3F4F8; border-radius: 20px;">
                <div class="card-right">
                    <h2 class="h2-profile">Pengaturan Kata Sandi</h2>
                    <h4 class="h4-ps">Anda dapat merubah kata sandi pada akun ini</h4>

                    <a href="/ganti-password"> <button type="submit" class="btn btn-4">Ubah Kata Sandi</button></a>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
