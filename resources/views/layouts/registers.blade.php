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
        @include('includes/popupParts/ask')
        @include('includes/popupParts/validateTelp')
        <form action="">
            @include('includes/popupParts/register')
            @include('includes/popupParts/video')
            @include('includes/popupParts/interest')
            @include('includes/popupParts/koin')
            @include('includes/popupParts/payment')
            @include('includes/popupParts/congratulation')
        </form>

        @include('includes.script')
        <script>
            function toHome() {
                window.location.replace("/home");
            }

            $(document).ready(function() {
                $("#daftar").click(() => {
                    $("#validate").modal("hide");
                    $("#register").modal("show");
                });
                $("#toRegister").modal("show");

                $("#options").change(function() {
                    const val = $(this).val();

                    if (val === "no") {
                        $("#register").modal("show");
                    } else {
                        $("#validate").modal("show");
                    }
                });
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

                $("#buying").change(function() {
                    const buy = $(this).val();

                    if (buy === "no") {
                        toHome();
                    }
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
        </script>
    </body>
</html>
