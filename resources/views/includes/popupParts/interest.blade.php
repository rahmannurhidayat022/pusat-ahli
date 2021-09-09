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
                    >Agar tidak ketinggalan update terbaru dari kami</small
                >
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="font-weight-bolder" for="kategori"
                        >Kategori</label
                    >
                    <select class="form-control" name="kategori" id="kategori">
                        <option value="SD/Sederajat">SD/Sederajat</option>
                        <option value="SMP/Sederajat">SMP/Sederajat</option>
                        <option value="SMA/Sederajat">SMA/Sederajat</option>
                        <option value="Mahasiswa">MAHASISWA</option>
                        <option value="Umum">UMUM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="reqFeature"
                        >Fitur yang kamu tunggu</label
                    >
                    <select
                        class="form-control"
                        name="reqFeature"
                        id="reqFeature"
                    >
                        <option value="Pusat Ahli">Pusat Ahli</option>
                        <option value="Tempat Ahli">Tempat Ahli</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="instansi"
                        >Nama instansi (Sekolah/Perusahaan/Kampus)*</label
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
                <button id="nextToBuy" type="button" class="btn btn-primary">
                    Simpan
                </button>
            </div>
        </div>
    </div>
</div>
