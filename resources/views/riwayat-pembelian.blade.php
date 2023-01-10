@extends('layouts.riwayat-pembelian') {{-- ini memanggil file main yang di dalam layout --}}
@section('riwayat-pembelian')
    <div class="riwayat-pembelian">
        <div class="background text-center">
            <div class="row align-item-center pt-2">
                <div class="col pt-5">
                    <h1 class="judul-section mt-5">Riwayat Pembelian</h1>
                </div>
            </div>
        </div>
        <div class="container pt-5 mb-5">
            <h3 style="padding-bottom: 17px;">Riwayat Pembelian</h3>
            <table class="table table-bordered text-center">
                <thead class="reservation">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Total</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nike Air Jordan 1 Low Bred Toe</td>
                        <td>IDR 2.500.000</td>
                        <td>IDR 2.580.000</td>
                        <td>12/01/2021</td>
                        <td>Selesai</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
@endsection
