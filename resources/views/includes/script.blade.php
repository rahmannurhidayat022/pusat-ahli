<script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script src="{{
        asset('vendors/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')
    }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            animateOut: "slideOutDown",
            animateIn: "flipInX",
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                }
            }
        });

        $("#backTop").click(() => {
            window.scroll({ top: 0, behavior: "smooth" });
        });
    });
</script>
