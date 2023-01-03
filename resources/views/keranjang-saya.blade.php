@extends('layouts.keranjang-saya')
@section('keranjang-saya')
    <div class="background text-center">
        <div class="row align-item-center pt-2">
            <div class="col pt-5">
                <h1 class="judul-section mt-5">Keranjang Saya</h1>
            </div>
        </div>
    </div>
    <div class="container pt-5 mb-5">
        <h3 style="padding-bottom: 17px;">Keranjang Saya</h3>
        <div class="d-flex">
            <div class="me-auto p-2">
                <table class="table table-bordered text-center" style="background-color: #f8f8f9">
                    <thead class="reservation">
                        <tr>
                            <th></th>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            
                            <td>
                                <div class="form-check ms-3 me-0 justify-content-center">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                            </td>
                            <td>
                                <div class="row justify-content-center">
                                    <div class="col-6"><img src="/source/img/detail-sepatu-2.png" alt="" style="width: 70%">
                                    </div>
                                    <div class="col-6 align-self-center">Nike Air Jordan 1 Low Bred Toe</div>
                                </div>
                            </td>
                            <td>IDR 2.500.000</td>
                            <td>
                                <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                    {{-- @endif --}}
                    {{-- @endforeach --}}
                </table>
            </div>
            <div class="p-2">
                <div class="card">
                    <div class="card-body">
                        <p>Total Pembayaran: <b>IDR 2.500.000</b></p>
                        <a href="detail-pemesanan"><button class="btn btn-purple text-white w-100">Checkout</button></a>
                    </div>
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
