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
                <span class="text-orange font-weight-bolder">DISKON 90%</span>
                <div class="list-group">
                    <div class="list-group-item">
                        1 Koin Rp<span style="text-decoration: line-through;"
                            >350.000</span
                        >
                        <span class="font-weight-bolder">
                            Rp35.000
                        </span>
                    </div>
                    <div class="list-group-item">
                        2 Koin Rp<span style="text-decoration: line-through;"
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
                <label class="font-weight-bolder">Transfer ke</label>
                <div class="d-flex justify-content-start align-items-center">
                    <img
                        src="{{ asset('images/BCABank.png') }}"
                        alt="BCA logo"
                        class="img-fluid"
                    />
                    <div class="identitas border-left pl-2">
                        <div class="list-group">
                            <div class="list-group-item text-gray-800">
                                Yulvinda Tan
                            </div>
                            <div class="list-group-item text-gray-800">
                                4280221088
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="uploadPayment"
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
                <button id="finally" type="button" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>
