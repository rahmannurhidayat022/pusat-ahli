<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />
        <link rel="shortcut icon" href="{{ url('frontend/img/icon.png') }}" />
        @include('includes.style')
        <title>Pusat Ahli</title>
    </head>
    <body>
        <div
            class="modal fade"
            id="toRegister"
            data-backdrop="static"
            data-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div
                        class="modal-header d-flex flex-column justify-content-center align-items-center"
                    >
                        <div
                            class="w-100 d-flex justify-content-center align-items-center"
                        >
                            <img
                                loading="lazy"
                                class="img-fluid d-block"
                                src="{{ asset('images/logo.png') }}"
                                alt="brand pusat ahli"
                            />
                        </div>
                        <h1
                            class="modal-title h5 font-weight-bolder"
                            id="staticBackdropLabel"
                        >
                            Apakah kamu sudah daftar ?
                        </h1>
                    </div>
                    <div class="modal-body">
                        <select
                            name="options"
                            class="selectpicker form-control"
                            data-live-search="false"
                            id="options"
                        >
                            <option value="">......</option>
                            <option value="no">Saya belum daftar</option>
                            <option value="yes">Saya sudah daftar</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <form action="">
            <div
                class="modal fade"
                id="register"
                data-backdrop="static"
                data-keyboard="false"
                tabindex="-1"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div
                            class="modal-header d-flex flex-column justify-content-center align-items-center"
                        >
                            <div
                                class="w-100 d-flex justify-content-center align-items-center"
                            >
                                <img
                                    loading="lazy"
                                    class="img-fluid d-block"
                                    src="{{ asset('images/logo.png') }}"
                                    alt="brand pusat ahli"
                                />
                            </div>
                            <h1
                                class="modal-title h5 font-weight-bolder"
                                id="staticBackdropLabel"
                            >
                                Mari isi PreOrder sekarang!
                            </h1>
                            <small class="text-muted"
                                >Dapatkan promo sepesial kami</small
                            >
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="font-weight-bolder" for="nama"
                                    >Nama lengkap</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    name="nama"
                                    id="nama"
                                    placeholder="Rahman Nurhidayat"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bolder" for="email"
                                    >Email</label
                                >
                                <input
                                    class="form-control"
                                    type="email"
                                    name="email"
                                    id="email"
                                    placeholder="rahman@mail.com"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bolder" for="phone"
                                    >Nomor Handphone</label
                                >
                                <input
                                    class="form-control"
                                    type="number"
                                    name="phone"
                                    id="phone"
                                    placeholder="08771256xxx"
                                    required
                                />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                            >
                                Kembali
                            </button>
                            <button
                                id="nextToVideo"
                                type="button"
                                class="btn btn-primary"
                            >
                                Selanjutnya
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="modal fade"
                id="video"
                data-backdrop="static"
                data-keyboard="false"
                tabindex="-1"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div
                            class="modal-header d-flex flex-column justify-content-center align-items-center"
                        >
                            <div
                                class="w-100 d-flex justify-content-center align-items-center"
                            >
                                <img
                                    loading="lazy"
                                    class="img-fluid d-block"
                                    src="{{ asset('images/logo.png') }}"
                                    alt="brand pusat ahli"
                                />
                            </div>
                            <h5
                                class="modal-title font-weight-bolder"
                                id="staticBackdropLabel"
                            >
                                Beginilah pentingnya membangun keahlian untuk
                                pekerjaan yang diimpikan!
                            </h5>
                            <small class="text-muted"
                                >Mari tonton bersama</small
                            >
                        </div>
                        <div class="modal-body">
                            <video
                                loading="lazy"
                                id="someID"
                                width="100%"
                                height="100%"
                                controls
                            >
                                <source
                                    loading="lazy"
                                    src="{{ asset('frontend/vid/HAI.mp4') }}"
                                    type="video/mp4"
                                />
                            </video>
                        </div>
                        <div class="modal-footer">
                            <button
                                id="nextToInterest"
                                type="button"
                                class="btn btn-primary"
                            >
                                Selanjutnya
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="modal fade"
                id="interest"
                data-backdrop="static"
                data-keyboard="false"
                tabindex="-1"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div
                            class="modal-header d-flex flex-column justify-content-center align-items-center"
                        >
                            <div
                                class="w-100 d-flex justify-content-center align-items-center"
                            >
                                <img
                                    loading="lazy"
                                    class="img-fluid d-block"
                                    src="{{ asset('images/logo.png') }}"
                                    alt="brand pusat ahli"
                                />
                            </div>
                            <h5
                                class="modal-title font-weight-bolder"
                                id="staticBackdropLabel"
                            >
                                Pilih terlebih dahulu ya
                            </h5>
                            <small class="text-muted"
                                >Agar tidak ketinggalan update terbaru dari
                                kami</small
                            >
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="font-weight-bolder" for="kategori"
                                    >Kategori</label
                                >
                                <select
                                    class="form-control"
                                    name="kategori"
                                    id="kategori"
                                >
                                    <option value="SD/Sederajat"
                                        >SD/Sederajat</option
                                    >
                                    <option value="SMP/Sederajat"
                                        >SMP/Sederajat</option
                                    >
                                    <option value="SMA/Sederajat"
                                        >SMA/Sederajat</option
                                    >
                                    <option value="Mahasiswa">MAHASISWA</option>
                                    <option value="Umum">UMUM</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label
                                    class="font-weight-bolder"
                                    for="reqFeature"
                                    >Fitur yang kamu tunggu</label
                                >
                                <select
                                    class="form-control"
                                    name="reqFeature"
                                    id="reqFeature"
                                >
                                    <option value="Pusat Ahli"
                                        >Pusat Ahli</option
                                    >
                                    <option value="Tempat Ahli"
                                        >Tempat Ahli</option
                                    >
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bolder" for="instansi"
                                    >Nama instansi
                                    (Sekolah/Perusahaan/Kampus)*</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    name="instansi"
                                    id="instansi"
                                    required
                                />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                id="nextToBuy"
                                type="button"
                                class="btn btn-primary"
                            >
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="modal fade"
                id="koin"
                data-backdrop="static"
                data-keyboard="false"
                tabindex="-1"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div
                            class="modal-header d-flex flex-column justify-content-center align-items-center"
                        >
                            <div
                                class="w-100 d-flex justify-content-center align-items-center"
                            >
                                <img
                                    loading="lazy"
                                    class="img-fluid d-block"
                                    src="{{ asset('images/logo.png') }}"
                                    alt="brand pusat ahli"
                                />
                            </div>
                            <h5
                                class="modal-title font-weight-bolder"
                                id="staticBackdropLabel"
                            >
                                Beli koin sekarang dan dapatkan bonusnya!
                            </h5>
                            <small class="text-muted"
                                >Bonusnya menarik lohh!</small
                            >
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="instagram"
                                    >Follow instagram Pusat Ahli yaa
                                    (@pusatahli)</label
                                >
                                <input
                                    class="form-control"
                                    type="file"
                                    name="instagran"
                                    id="instagram"
                                />
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bolder" for="buying"
                                    >Beli koin ahli</label
                                >
                                <select
                                    class="form-control"
                                    name="buying"
                                    id="buying"
                                >
                                    <option value="yes"
                                        >Saya mau beli koin sekarang!</option
                                    >
                                    <option value="No"
                                        >Nanti saja beli koinnya</option
                                    >
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bolder" for="materi"
                                    >Pilihan materi</label
                                >
                                <select
                                    class="form-control"
                                    name="materi"
                                    id="materi"
                                >
                                    <option>Matematika (Permintaan)</option>
                                    <option>Fisika</option>
                                    <option>Biologi</option>
                                    <option>Kimia</option>
                                    <option>Geografi</option>
                                    <option>Sejarah (Permintaan)</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                id="nextToPayment"
                                type="button"
                                class="btn btn-primary"
                            >
                                Selanjutnya
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="modal fade"
                id="payment"
                data-backdrop="static"
                data-keyboard="false"
                tabindex="-1"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div
                            class="modal-header d-flex flex-column justify-content-center align-items-center"
                        >
                            <div
                                class="w-100 d-flex justify-content-center align-items-center"
                            >
                                <img
                                    loading="lazy"
                                    class="img-fluid d-block"
                                    src="{{ asset('images/logo.png') }}"
                                    alt="brand pusat ahli"
                                />
                            </div>
                            <h5
                                class="modal-title font-weight-bolder"
                                id="staticBackdropLabel"
                            >
                                Beli koin ahli
                            </h5>
                        </div>
                        <div class="modal-body">
                            <span class="text-orange font-weight-bolder"
                                >DISKON 90%</span
                            >
                            <div class="list-group">
                                <div class="list-group-item">
                                    1 Koin Rp<span
                                        style="text-decoration: line-through;"
                                        >350.000</span
                                    >
                                    <span class="font-weight-bolder">
                                        Rp35.000
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    2 Koin Rp<span
                                        style="text-decoration: line-through;"
                                        >550.000</span
                                    >
                                    <span class="font-weight-bolder">
                                        Rp55.000
                                    </span>
                                </div>
                            </div>
                            <div class="table-responsive my-2">
                                <table class="table">
                                    <thead>
                                        <th>Koin</th>
                                        <th>Jumlah koin</th>
                                        <th>Harga</th>
                                    </thead>
                                    <tbody>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bolder" for="total"
                                    >Total harga</label
                                >
                                <input
                                    class="form-control"
                                    readonly
                                    type="number"
                                    name="total"
                                    id="total"
                                />
                            </div>
                            <label class="font-weight-bolder"
                                >Transfer ke</label
                            >
                            <div
                                class="d-flex justify-content-start align-items-center"
                            >
                                <img
                                    src="{{ asset('images/BCABank.png') }}"
                                    alt="BCA logo"
                                    class="img-fluid"
                                />
                                <div class="identitas border-left pl-2">
                                    <div class="list-group">
                                        <div
                                            class="list-group-item text-gray-800"
                                        >
                                            Yulvinda Tan
                                        </div>
                                        <div
                                            class="list-group-item text-gray-800"
                                        >
                                            4280221088
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label
                                    class="font-weight-bolder"
                                    for="uploadPayment"
                                    >Bukti pembayaran</label
                                >
                                <input
                                    class="form-control"
                                    type="file"
                                    name="uploadPayment"
                                    id="uploadPayment"
                                />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                id="finally"
                                type="button"
                                class="btn btn-primary"
                            >
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="modal fade"
                id="congratulation"
                data-backdrop="static"
                data-keyboard="false"
                tabindex="-1"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div
                                class="w-100 d-flex justify-content-center align-items-center"
                            >
                                <img
                                    loading="lazy"
                                    class="img-fluid d-block"
                                    src="{{ asset('images/logo.png') }}"
                                    alt="brand pusat ahli"
                                />
                            </div>
                        </div>
                        <div class="modal-body">
                            <h5 class="h4 text-success">Pembayaran Sukses!</h5>
                            <p>
                                Kami akan mengkonfirmasi melalui email kamu ya
                            </p>
                        </div>
                        <div class="modal-footer">
                            <a href="/home" class="btn btn-primary">
                                Selesai
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        @include('includes.script')
        <script>
            $(document).ready(function() {
                $("#toRegister").modal("show");

                $("#options").change(function() {
                    const val = $(this).val();

                    if (val === "no") {
                        $("#register").modal("show");
                    } else {
                        console.log("Yess");
                    }

                    $("#nextToVideo").click(() => {
                        $("#toRegister").modal("hide");
                        $("#register").modal("hide");
                        $("#video").modal("show");
                    });

                    $("#nextToInterest").click(() => {
                        $("#video").modal("hide");
                        $("#interest").modal("show");
                    });

                    $("#nextToBuy").click(() => {
                        $("#interest").modal("hide");
                        $("#koin").modal("show");
                    });

                    $("#nextToPayment").click(() => {
                        $("#koin").modal("hide");
                        $("#payment").modal("show");
                    });

                    $("#finally").click(() => {
                        $("#payment").modal("hide");
                        $("#congratulation").modal("show");
                    });
                });
            });
        </script>
    </body>
</html>
