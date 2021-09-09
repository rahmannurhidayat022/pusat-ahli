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
