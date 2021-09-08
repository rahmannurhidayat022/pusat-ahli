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
        <section id="features">
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
    </body>
</html>
