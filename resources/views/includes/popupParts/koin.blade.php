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
                <small class="text-muted">Bonusnya menarik lohh!</small>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="instagram"
                        >Follow instagram Pusat Ahli yaa (@pusatahli)</label
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
                    <select class="form-control" name="buying" id="buying">
                        <option value="yes"
                            >Saya mau beli koin sekarang!</option
                        >
                        <option value="no">Nanti saja beli koinnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="materi"
                        >Pilihan materi</label
                    >
                    <select class="form-control" name="materi" id="materi">
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
