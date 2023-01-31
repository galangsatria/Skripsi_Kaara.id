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
                <form action="{{ route ('request.barang') }}" method="post">
                 @csrf
                        <div class="form">
                            <label for="fullname" class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukan Nama Lengkap (required)" required>
                        </div>
                        <div class="form">
                            <label for="alamat" class="form-label">Nomor Telepon</label>
                            <input type="text" name="phone" class="form-control" placeholder="Masukan Nomor Telepon">
                        </div>
                        <div class="form">
                            <label for="rt" class="form-label">Kategori Barang</label>
                            <select class="form-select" name="kategori" aria-label="Default select example">
                                <option selected>Pilih Kategori Barang</option>
                                <option value="Tas">Tas</option>
                                <option value="Sepatu">Sepatu</option>
                                <option value="Celana">Celana</option>
                                <option value="Baju">Baju</option>
                                <option value="Aksesoris">Aksesoris</option>
                                <option value="Lainnya">Lainnya</option>
                              </select>
                        </div>
                        <div class="form">
                            <label for="kelurahan" class="form-label">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" placeholder="Masukan Nama Barang" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-purple mt-3 font-poppins fs-5" style="width: 30%; color: white">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
