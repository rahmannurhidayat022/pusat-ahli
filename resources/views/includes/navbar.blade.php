<nav class="navbar navbar-expand-lg navbar-dark bg-purple shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img
                src="{{ asset('frontend/img/Logo.png') }}"
                width="40"
                height="40"
                alt="brand logo"
            />
        </a>
        <button
            class="navbar-toggler text-gray-300"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link px-2" href="#hero"
                        >Home <span class="sr-only">(current)</span></a
                    >
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#faq">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
