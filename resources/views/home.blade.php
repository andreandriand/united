@extends('layouts.main')
@section('content')
    <section id="home" class="pt-5 pb-2">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/1.png" alt="player" width="250">
                </div>
                <div class="col-md-9 mt-5">
                    <h2 class="fs-1 lh-lg fw-bold">Selamat Datang <br> <span style="color: #ba181b;">Manchunian</span>
                        Indonesia
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section id="jadwal" class="bg-cultured pt-1">
        <div class="container">
            <div class="row mt-5 text-center">
                <div class="col">
                    <h2 class="fs-1 fw-bold">Jadwal Pertandingan</h2>
                </div>
            </div>
            <div class="row mt-5 pb-4">
                <div class="col">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal & Waktu</th>
                                <th scope="col">Kejuaraan</th>
                                <th scope="col">Lawan</th>
                                <th scope="col">Tempat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>23 Agustus 2022 | 02.00 WIB</td>
                                <td>Liga Inggris</td>
                                <td>Liverpool</td>
                                <td>Stadion Anfield</td>
                            </tr>
                            <tr>
                                <td>28 Agustus 2022 | 02.00 WIB</td>
                                <td>Liga Eropa</td>
                                <td>Lazio</td>
                                <td>Dela Capilate</td>
                            </tr>
                            <tr>
                                <td>31 Agustus 2022 | 02.00 WIB</td>
                                <td>Liga Inggris</td>
                                <td>Chelsea</td>
                                <td>Stamford Brigde</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="berita" class="pt-5 pb-5 bg-cultured">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="fs-1 fw-bold">Berita Terkini</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/32.jpg" class="card-img-top" alt="images">
                        <div class="card-body">
                            <h5 class="card-title">ETH : "Ini Tim Sampah"</h5>
                            <p class="card-text">Komentar Erik Ten Hag setelah kalah 4-0 melawan Brentford FC</p>
                            <a href="#" class="btn btn-danger">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/42.jpg" class="card-img-top" alt="images">
                        <div class="card-body">
                            <h5 class="card-title">Cristiano Ingin Hengkang</h5>
                            <p class="card-text">Kena Mental</p>
                            <a href="#" class="btn btn-danger">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/52.jpg" class="card-img-top" alt="images">
                        <div class="card-body">
                            <h5 class="card-title">MU Peringkat 1</h5>
                            <p class="card-text">Dari bawah maksudnya</p>
                            <a href="#" class="btn btn-danger">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/62.jpg" class="card-img-top" alt="images">
                        <div class="card-body">
                            <h5 class="card-title">De Gea : "Maafkan Aku"</h5>
                            <p class="card-text">De Gea mengaku bersalah</p>
                            <a href="#" class="btn btn-danger">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sponsor" class="mt-5 pb-5">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h2 class="fs-1 fw-bold">Sponsor Resmi</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <img src="img/adidas.png" alt="adidas" width="150" class="p-3">
                    <img src="img/tezos.png" alt="tezos" width="150" class="p-3">
                    <img src="img/dxc.png" alt="dxc" width="150" class="p-3">
                    <img src="img/teamviewer.png" alt="teamviewer" width="150" class="p-3">
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="bg-eerie-black text-light text-center p-2">Created by Andre &copy; 2022</footer>
@endsection
