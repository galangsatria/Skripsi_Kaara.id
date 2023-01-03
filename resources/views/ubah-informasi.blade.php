@extends('layouts.ubah-informasi')
@section('ubah-informasi')
    <div class="ubah-informasi">
        <div class="background text-center">
            <div class="row align-item-center pt-2">
                <div class="col pt-5">
                    <h1 class="judul-section mt-5">Ubah Informasi</h1>
                </div>
            </div>
        </div>
        <div class="container p-5">
            <div class="card mx-auto">
                <div class="card-body">
                    <form action="">
                        <div class="form">
                            <label for="fullname" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Galang">
                        </div>
                        <div class="form">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" placeholder="Cimahi Utara no.16">
                        </div>
                        <div class="form">
                            <label for="rt" class="form-label">RT/RW</label>
                            <input type="text" class="form-control" placeholder="RT 06 RW 09" required>
                        </div>
                        <div class="form">
                            <label for="kelurahan" class="form-label">Kelurahan</label>
                            <input type="text" class="form-control" placeholder="Kelurahan Citeureup" required>
                        </div>
                        <div class="form">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control" placeholder="Cimahi Utara" required>
                        </div>
                        <div class="form">
                            <label for="kabupaten" class="form-label">Kabupaten/kota</label>
                            <input type="text" class="form-control" placeholder="Kota Cimahi" required>
                        </div>
                        <div class="form">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <input type="text" class="form-control" placeholder="Jawa Barat" required>
                        </div>
                        <div class="form">
                            <label for="kode" class="form-label">Kode Pos</label>
                            <input type="text" class="form-control" placeholder="123344" required>
                        </div>
                        <div class="form">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control" placeholder="082238448583" required>
                        </div>
                        <div class="form mb-2 fw-bold">
                            <label for="pengiriman">
                                Metode Pengiriman
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                JNE </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                JNT </label>
                        </div>
                        <div class="form mb-2 mt-3 fw-bold">
                            <label for="pengiriman">
                                Metode Pembayaran
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                BRI Virtual Account </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                BNI Virtual Account </label>
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
