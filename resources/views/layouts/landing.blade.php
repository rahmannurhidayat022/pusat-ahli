<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Pusat Ahli</title>
        <link rel="shortcut icon" href="{{ url('frontend/img/icon.png') }}" />
        <meta
            name="google-site-verification"
            content="ur9s154SVubuHAdQMAedZuBGoTrFTl77NSVjTBq4TuM"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />
        @include('includes.style') @include('includes.script')
    </head>
    <body>
        @include('includes.navbar')
        <header id="hero" class="my-5 py-3 shadow-sm">
            <div class="container">
                <div class="row">
                    <div
                        class="col-sm-12 col-md-0 d-flex justify-content-center"
                    >
                        <img
                            class="d-block d-md-none"
                            width="300px"
                            src="{{ asset('images/hero.png') }}"
                            alt="1st top learning"
                        />
                    </div>
                    <div
                        class="d-flex flex-column align-items-center justify-content-md-center col-sm-12 col-md-6 "
                    >
                        <p style="font-size: larger; line-height: 32px;">
                            <span class="text-primary">PUSAT</span>
                            <span class="text-orange">AHLI</span> adalah satu
                            satunya start up penggabungan antara bimbingan
                            online, kursus bersertifikasi, dan lowongan
                            pekerjaan pertama di indonesia.
                            <button
                                class="btn btn-primary rounded mt-4 d-block"
                            >
                                Selengkapnya
                            </button>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex justify-content-end">
                        <img
                            class="d-none d-md-block"
                            width="370px"
                            src="{{ asset('images/hero.png') }}"
                            alt="1st top learning"
                        />
                    </div>
                </div>
            </div>
        </header>
        <section id="features" class="my-5">
            <div class="container">
                <h2 class="h2 mb-4">
                    Kenapa harus belajar di
                    <span class="text-primary">PUSAT</span>
                    <span class="text-orange">AHLI</span>?
                </h2>
            </div>
            <div class="feature-1 shadow-sm mb-3 py-5 bg-gray-100">
                <div class="container">
                    <div class="row my-2">
                        <div
                            class="col-sm-12 col-md-6 d-flex justify-content-start"
                        >
                            <img
                                class="img-fluid"
                                src="{{ asset('images/feature-1.png') }}"
                                alt="1st top learning"
                            />
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <p
                                class="text-gray-600"
                                style="font-size: medium; line-height: 32px;"
                            >
                                Karena Hanya di Pusat Ahli kamu bisa mendapatkan
                                pembelajaran Intensif bersama mentor yang ahli
                                di bidangnya, ribuan video pembelajaran,
                                sertifikasi keahlian dan Prioritas Mendapatkan
                                pekerjaan dalam satu platform.
                                <button
                                    class="btn btn-primary rounded mt-4 d-block"
                                >
                                    Selengkapnya
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-2 shadow-sm mb-3 py-5">
                <div class="container">
                    <div class="row my-2">
                        <div
                            class="col-sm-12 col-md-0 d-flex justify-content-end"
                        >
                            <img
                                class="img-fluid d-block d-md-none"
                                src="{{ asset('images/feature-2.png') }}"
                                alt="1st top learning"
                            />
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h3 class="h4">
                                Kenapa harus di BELAJAR AHLI?
                            </h3>
                            <p
                                class="text-gray-600"
                                style="font-size: medium; line-height: 32px;"
                            >
                                Hanya di belajar ahli, kamu bisa mendapatkan
                                pengajaran langsung oleh para tutor yang ahli
                                dibidangnya, dapat
                                <strong>sertifikat keahlian</strong>, dan yang
                                paling penting Untuk anak SMA/K dan Mahasiwa
                                yang sedang mencari kerja, kalian akan
                                mendapatkan prioritas
                                <strong
                                    >untuk masuk pekerjaan di Tempat
                                    Ahli.</strong
                                >
                                Kami juga menyediakan ribuan video pembelajaran,
                                yang bisa kamu akses dimana saja dan kapan saja.
                                <button
                                    class="btn btn-primary rounded mt-4 d-block"
                                >
                                    Selengkapnya
                                </button>
                            </p>
                        </div>
                        <div
                            class="col-sm-12 col-md-6 d-flex justify-content-end"
                        >
                            <img
                                class="img-fluid d-none d-md-block"
                                src="{{ asset('images/feature-2.png') }}"
                                alt="1st top learning"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-3 shadow-sm mb-3 py-5 bg-gray-100">
                <div class="container">
                    <div class="row my-2">
                        <div
                            class="col-sm-12 col-md-6 d-flex justify-content-start"
                        >
                            <img
                                class="img-fluid"
                                src="{{ asset('images/feature-3.png') }}"
                                alt="1st top learning"
                            />
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h3 class="h4">
                                Kenapa harus di TEMPAT AHLI?
                            </h3>
                            <p
                                class="text-gray-600"
                                style="font-size: medium; line-height: 32px;"
                            >
                                Karena setelah mendapat pendidikan dan
                                sertifikasi resmi dari
                                <strong>Belajar Ahli</strong>, kami akan
                                merekomendasikan anda di portal loker kami di
                                <strong>Tempat Ahli.</strong> Tentunya sesuai
                                dengan pendidikan dan sertifikasi anda.
                                <button
                                    class="btn btn-primary rounded mt-4 d-block"
                                >
                                    Selengkapnya
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="superiority" class="my-5">
            <div class="container">
                <h2 class="h2 mb-4">
                    Kenapa TEMPAT AHLI itu berbeda?
                </h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-orange text-white">
                            <tr>
                                <th scope="col">Kualifikasi</th>
                                <th scope="col">Portal kerja lain</th>
                                <th scope="col">Tempat Ahli</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    Hanya menampilkan dan merekomendasikan
                                    lowongan yang sesuai kualifikasi dan
                                    keahlian pelamar
                                </th>
                                <td>
                                    <i
                                        class="text-danger fa fa-times fa-3x"
                                    ></i>
                                </td>
                                <td>
                                    <i
                                        class="text-success fa fa-check fa-3x"
                                    ></i>
                                </td>
                            </tr>
                            <tr>
                                <th>Pembuatan CV otomatis</th>
                                <td>
                                    <i
                                        class="text-danger fa fa-times fa-3x"
                                    ></i>
                                </td>
                                <td>
                                    <i
                                        class="text-success fa fa-check fa-3x"
                                    ></i>
                                </td>
                            </tr>
                            <tr>
                                <th>Auto screnning kualifikasi pelamar</th>
                                <td>
                                    <i
                                        class="text-danger fa fa-times fa-3x"
                                    ></i>
                                </td>
                                <td>
                                    <i
                                        class="text-success fa fa-check fa-3x"
                                    ></i>
                                </td>
                            </tr>
                            <tr>
                                <th>Seleksi psikotes</th>
                                <td>
                                    <i
                                        class="text-danger fa fa-times fa-3x"
                                    ></i>
                                </td>
                                <td>
                                    <i
                                        class="text-success fa fa-check fa-3x"
                                    ></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section id="services" class="my-5">
            <div class="container">
                <h2 class="h2 mb-4">
                    Layanan kami
                </h2>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div
                            class="card mb-3 shadow-sm"
                            style="border-radius: 20px; overflow: hidden;"
                        >
                            <img
                                class="card-img-top"
                                src="{{ asset('images/service-1.jpg') }}"
                                alt="service-1"
                            />
                            <div class="card-body">
                                <p>
                                    Belajar Ahli adalah tempat bimbingan belajar
                                    bagi semua kalangan dan kursus
                                    bersertifikasi resmi dari Belajar Ahli yang
                                    akan kami rekomendasikan di Tempat Ahli
                                </p>
                                <button
                                    class="btn py-3 btn-primary btn-block rounded"
                                >
                                    Gabung untuk menunggu
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div
                            class="card mb-3 shadow-sm"
                            style="border-radius: 20px; overflow: hidden;"
                        >
                            <img
                                class="card-img-top"
                                src="{{ asset('images/service-2.jpg') }}"
                                alt="service-1"
                            />
                            <div class="card-body">
                                <p>
                                    Tempat Ahli adalah portal lowongan pekerjaan
                                    yang akan menyesuaikan antara sertifikasi
                                    keahlian anda dengan lowongan pekerjaan yang
                                    ada
                                </p>
                                <button
                                    class="btn py-3 btn-primary btn-block rounded"
                                >
                                    Gabung untuk menunggu
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="videos" class="my-5">
            <div class="container">
                <h2 class="h2 mb-4">
                    Video pembelajaran
                </h2>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <iframe
                            class="w-100"
                            height="316px"
                            src="https://www.youtube.com/embed/_8XOSzoonXM"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <iframe
                            class="w-100"
                            height="316px"
                            src="https://www.youtube.com/embed/2GR2fiUoYAM"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <iframe
                            class="w-100"
                            height="316px"
                            src="https://www.youtube.com/embed/47lBjsJWg4o"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <iframe
                            class="w-100"
                            height="316px"
                            src="https://www.youtube.com/embed/AfXj-02I5F4"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section id="teams" class="my-5">
            <div class="container">
                <h2 class="h2 mb-4">
                    Teams kami
                </h2>
                ...
            </div>
        </section>
        <section id="faq" class="my-5">
            <div class="container">
                <h2 class="h2 mb-4">
                    Pertanyaan yang sering diajukan
                </h2>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button
                                    class="btn btn-link btn-block text-left"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#faq1"
                                    aria-expanded="true"
                                    aria-controls="faq1"
                                >
                                    Apa itu Pusat Ahli?
                                </button>
                            </h2>
                        </div>

                        <div
                            id="faq1"
                            class="collapse show"
                            aria-labelledby="headingOne"
                            data-parent="#accordionExample"
                        >
                            <div class="card-body">
                                PUSAT AHLI adalah satu satunya Startup
                                penggabungan antara bimbingan belajar online,
                                kursus bersertifikasi dan portal pencarian kerja
                                pertama di Indonesia
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button
                                    class="btn btn-link btn-block text-left collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#faq2"
                                    aria-expanded="false"
                                    aria-controls="faq2"
                                >
                                    Apa saja fitur Belajar Ahli?
                                </button>
                            </h2>
                        </div>
                        <div
                            id="faq2"
                            class="collapse"
                            aria-labelledby="headingTwo"
                            data-parent="#accordionExample"
                        >
                            <div class="card-body">
                                Hanya di belajar ahli, kamu bisa mendapatkan
                                pengajaran langsung oleh para tutor yang ahli
                                dibidangnya, dapat sertifikat keahlian, dan yang
                                paling penting untuk anak SMA/K dan Mahasiswa
                                yang sedang mencari kerja, kalian akan
                                mendapatkan prioritas untuk masuk pekerjaan di
                                Tempat Ahli. Kami juga menyediakan ribuan video
                                pembelajaran, yang bisa kamu akses dimana saja
                                dan kapan saja.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button
                                    class="btn btn-link btn-block text-left collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#faq3"
                                    aria-expanded="false"
                                    aria-controls="faq3"
                                >
                                    Apa saja fitur Tempat Ahli?
                                </button>
                            </h2>
                        </div>
                        <div
                            id="faq3"
                            class="collapse"
                            aria-labelledby="headingThree"
                            data-parent="#accordionExample"
                        >
                            <div class="card-body">
                                Karena setelah mendapatkan pendidikan dan
                                sertifikasi resmi dari Belajar Ahli, kami akan
                                merekomendasikan anda di portal loker kami di
                                Tempat Ahli. Tentunya sesuai dengan pendidikan
                                dan sertifikasi anda.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button
                                    class="btn btn-link btn-block text-left collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#faq4"
                                    aria-expanded="false"
                                    aria-controls="faq4"
                                >
                                    Berapa Harga Belajar Intensif?
                                </button>
                            </h2>
                        </div>
                        <div
                            id="faq4"
                            class="collapse"
                            aria-labelledby="headingThree"
                            data-parent="#accordionExample"
                        >
                            <div class="card-body">
                                1 jam dari Rp350.000 diskon 90% menjadi Rp35.000
                                <br />2 jam dari Rp550.000 diskon 90% menjadi
                                Rp55.000
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button
                                    class="btn btn-link btn-block text-left collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#faq5"
                                    aria-expanded="false"
                                    aria-controls="faq5"
                                >
                                    Bagaimana Belajar Intensif?
                                </button>
                            </h2>
                        </div>
                        <div
                            id="faq5"
                            class="collapse"
                            aria-labelledby="headingThree"
                            data-parent="#accordionExample"
                        >
                            <div class="card-body">
                                - harga terjangkau dengan kualitas terbaik
                                <br />- pengajar ahli dibidangnya <br />- konsep
                                belajar dikemas secara menarik <br />- bisa
                                diakses kapan saja dan dimana saja
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer" class="border-top bg-purple pt-5">
            <div class="container">
                <div class="row">
                    <div class="d-flex justify-content-center d-md-block col-sm-12 col-md-4">
                        <img class="mb-3" width="141" height="123" src="{{asset('images/brand-footer.png')}}" alt="brand logo" />
                    </div>
                    <div class="d-flex flex-column align-items-center d-md-block col-sm-12 col-md-4">
                        <h3 class="h5 text-gray-300">Office</h4>
                        <address class="text-gray-500">
                            PT. Pusat Ahli <br />
                            Jl.Maju terus pantang rugi No 25 <br />
                            Jakarta - Indonesia <br />
                            customer.pusatahli@gmail.com
                        </address>
                    </div>
                    <div class="d-flex flex-column align-items-center d-md-block col-sm-12 col-md-4">
                        <h3 class="h5 text-gray-300">Sosial media</h4>
                        <ul class="list-group list-group-flush mb-sm-5">
                            <li class="list-group-item">
                                <i class="fab fa-instagram"></i>
                                pusatahli
                            </li>
                            <li class="list-group-item">
                                <i class="fab fa-facebook"></i>
                                Pusat Ahli Indonesia
                            </li>
                            <li class="list-group-item">
                                <i class="fab fa-youtube"></i>
                                Pusat Ahli
                            </li>
                            <li class="list-group-item">
                                <i class="fab fa-tiktok"></i>
                                pusatahliid
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <h3 class="h5 text-gray-300">Layanan</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bidang ahli</li>
                            <li class="list-group-item">Tempat ahli</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h3 class="h5 text-gray-300">Perusahaan</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Tentang</li>
                            <li class="list-group-item">Kontak</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h3 class="h5 text-gray-300">Bahasa</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bahasa indonesia</li>
                            <li class="list-group-item">English (US)</li>
                        </ul>
                    </div>
                </div>
                <div class="py-4 mx-auto border-top row d-flex flex-column align-items-center text-gray-600">
                  &copy; Copyright Pusat Ahli. All Rights Reserved
                  <div class="credits">
                      Designed by <a class="text-gray-700" href="https://github.com/rahmannurhidayat022">Rahman Nurhidayat</a> | Front-End Pusat Ahli
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
