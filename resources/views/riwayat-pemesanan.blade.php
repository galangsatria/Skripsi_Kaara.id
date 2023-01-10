@extends('layouts.riwayat-pembelian') {{-- ini memanggil file main yang di dalam layout --}}
@section('riwayat-pembelian')
    <div class="riwayat-pembelian">
        <div class="background text-center">
            <div class="row align-item-center pt-2">
                <div class="col pt-5">
                    <h1 class="judul-section mt-5">Riwayat Pemesanan</h1>
                </div>
            </div>
        </div>
        <div class="container pt-5 mb-5">
            <h3 style="padding-bottom: 17px;">Riwayat Pemesanan</h3>
            <table class="table table-bordered text-center">
                <thead class="reservation">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nike Air Jordan 1 Low Bred Toe</td>
                        <td>IDR 2.500.000</td>
                        <td>12/01/2021</td>
                        <td>
                            <div class="row justify-content-center" style="margin-left: -40px">
                                <div class="col-lg-4">
                                    <button class="btn btn-purple" style="color: white; width: 150px; font-weight:bold;"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">Bayar</button>
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-danger" style="margin-right: -60px" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Hapus</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

    {{-- Modal sukses --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="/source/img/Vector.png" class="vector" alt="" style="width: 30%">
                    <h2 class="h2-modal mb-5">Pembayaran Berhasil</h2>
                    <a href="/riwayat-pembelian"><button class="btn btn-success">Lihat Riwayat Pembelian</button></a>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal hapus --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah anda ingin menghapus barang?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Anda harus melakukan pemesanan ulang apabila menghapus barang
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endsection
