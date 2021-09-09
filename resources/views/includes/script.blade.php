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
<script src="{{
        asset('vendors/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')
    }}"></script>
<script src="{{ asset('vendors/aos-master/dist/aos.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

<script>
    $(document).ready(function() {
        AOS.init();

        var video_wrapper = $(".youtube-video-place");
        //  Check to see if youtube wrapper exists
        if (video_wrapper.length) {
            // If user clicks on the video wrapper load the video.
            $(".play-youtube-video").on("click", function() {
                /* Dynamically inject the iframe on demand of the user.
    Pull the youtube url from the data attribute on the wrapper element. */
                video_wrapper.html(
                    '<iframe allowfullscreen frameborder="0" class="embed-responsive-item" src="' +
                        video_wrapper.data("yt-url") +
                        '"></iframe>'
                );
            });
        }
        $(".owl-carousel").owlCarousel({
            animateOut: "slideOutDown",
            animateIn: "flipInX",
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 3000,
            lazyLoad: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                }
            }
        });

        $("#backTop").click(() => {
            window.scroll({ top: 0, behavior: "smooth" });
        });
    });
</script>
