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
                <small class="text-muted">Dapatkan promo sepesial kami</small>
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
                    <label class="font-weight-bolder" for="email">Email</label>
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
                <button id="nextToVideo" type="button" class="btn btn-primary">
                    Selanjutnya
                </button>
            </div>
        </div>
    </div>
</div>
