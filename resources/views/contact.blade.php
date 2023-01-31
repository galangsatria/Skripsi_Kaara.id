@extends('layouts.contact') {{-- ini memanggil file main yang di dalam layout --}}
@section('contact')
    <div id="Contact">
        <div class="row">
            <div class="col-sm-5">
                <h1 class="h1-kiri">Hubungi <span style="color :#ffabe1">Kami</span>!</h1>
                <h2 class="h2-kiri">Silahkan isi form di samping untuk mengajukan pertanyaan. Tim kami akan menghubungi
                    secepatnya!</h2>
                <div class="row email">
                    <div class="col-sm-1">
                        <p class="bi bi-instagram"></p>
                    </div>
                    <div class="col-sm-11">
                        <h4 class="h4-kiri text-break">kaara.id</h4>
                    </div>
                </div>
                <div class="row location">
                    <div class="col-sm-1">
                        <img src="/source/img/line.png" class="shopeee">
                    </div>
                    <div class="col-sm-11">
                        <h6 class="h6-kiri">@447GPDMR</h6>
                    </div>
                </div>
                <div class="row location">
                    <div class="col-sm-1">
                        <img src="/source/img/shopee.png" class="shopeee">
                    </div>
                    <div class="col-sm-11">
                        <h6 class="h6-kiri">Kaara.id</h6>
                    </div>
                </div>
                <div class="foto col-sm-12">
                    <img src="/source/img/contact.png" class="group">
                </div>
            </div>

            <div class="col-sm-7">
                <div class="row">
                    <div class=" col-sm-12">
                    <form action="{{ route ('feedback') }}" method="post">
                    @csrf
                        <div class="form-name">
                            <label for="#" class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your first name">
                        </div>
                    </div>
                </div>

                <div class="row" style="padding-top: 40px;">
                    <div class="col-sm-6">
                        <div class="form-email">
                            <label for="#" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Masukan email">

                        </div>
                    </div>
                    <div class="col-sm-6" style="padding-left: 25px;">
                        <div class="form-number">
                            <label for="#" class="form-label">Nomor Telepon</label>
                            <input type="text" name="phone" class="form-control" placeholder="Masukan Nomor Telepon">

                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 40px;">
                    <div class="col-sm-12">
                        <div class="form-question">
                            <label for="#" class="form-label">Pertanyaan atau Pesan</label>
                            <textarea name="pesan" class="fc-q form-control" placeholder="Masukan pesan atau pertanyaan"></textarea>

                        </div>
                    </div>
                </div>

                <div class="button col-sm-12">
                    <div class="row">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-send">Kirim</button>
                        </div>
                        <div class="col-sm-2">
                            <a href="/bantuan"><button type="submit" class="btn btn-back">Kembali</button></a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
