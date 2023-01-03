@extends('layouts.request-barang')
@section('request-barang')
    <div class="container">
        <div class="background text-center">
            <div class="row align-item-center pt-2">
                <div class="col pt-5">
                    <h2 class="judul-section mt-5">Request Barang Jasa Titip</h2>
                </div>
            </div>
        </div>

        <div>
            <div style="text-align:center;">
                <div class="col-sm-12">
                    <h5 style="color:  #bfbfbf;">Kaara.id menyediakan fitur request barang bagi konsumen yang ingin memesan barang namun tidak ada 
                        di list koleksi kami. Tim kami akan menghubungi konsumen secara pribadi untuk melanjutkan pemesanan</h5>
                </div>
            </div>
        </div>
        
        <div class="container p-5">
            <div class="card mx-auto">
                <div class="card-body">
                    <form action="">
                        <div class="form">
                            <label for="fullname" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama Lengkap (required)" required>
                        </div>
                        <div class="form">
                            <label for="alamat" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" placeholder="Masukan Nomor Telepon">
                        </div>
                        <div class="form">
                            <label for="rt" class="form-label">Kategori Barang</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Kategori Barang</option>
                                <option value="1">Tas</option>
                                <option value="2">Sepatu</option>
                                <option value="3">Celana</option>
                                <option value="4">Baju</option>
                                <option value="5">Aksesoris</option>
                                <option value="6">Lainnya</option>
                              </select>
                        </div>
                        <div class="form">
                            <label for="kelurahan" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama Barang" required>
                        </div>
                        
                        
                        <div class="text-center">
                            <button class="btn btn-purple mt-3 font-poppins fs-5" style="width: 30%; color: white">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
