<div
    class="modal fade"
    id="validate"
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
                <div class="form-group">
                    <label class="font-weight-bolder" for="phone"
                        >Nomor Handphone</label
                    >
                    <input
                        class="form-control"
                        type="number"
                        name="phone"
                        id="phone"
                        placeholder="08771256xxxx"
                        required
                    />
                </div>
            </div>
            <button
                onclick="toHome()"
                type="button"
                class="mx-auto mb-4 btn btn-primary"
            >
                Selanjutnya
            </button>
            <p class="w-100 text-center">
                Belum daftar?
                <a id="daftar" href="javascript::void()">Daftar</a>
            </p>
        </div>
    </div>
</div>
