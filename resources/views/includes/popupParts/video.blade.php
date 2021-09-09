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
                    Beginilah pentingnya membangun keahlian untuk pekerjaan yang
                    diimpikan!
                </h5>
                <small class="text-muted">Mari tonton bersama</small>
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
