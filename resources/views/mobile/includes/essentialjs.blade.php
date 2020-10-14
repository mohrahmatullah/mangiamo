<script type="text/javascript" src="{{ URL('assets/js/jquery.js') }}"></script>

<!-- Import Jquery 3.3.1 -->
<script type="text/javascript" src="{{ URL('assets/js/jquery-3.3.1.min.js') }}"></script>

<!-- Import Bootstrap JS -->
<script type="text/javascript" src="{{ URL('assets/js/bootstrap.min.js') }}"></script>

<!-- Import NProgress JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>

<!-- waterwheel -->
<script type="text/javascript" src="{{ URL('assets/js/jquery.waterwheelCarousel.js') }}"></script>
<script type="text/javascript" src="{{ URL('assets/js/jquery.nice-select.js') }}"></script>

<!-- Fancybox -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!-- Import Javascript -->
<script type="text/javascript" src="{{ URL('assets/js/script.js') }}"></script>

<!-- Sweetalert -->
<script src="https://cdn.jsdelivr.net/sweetalert2/6.4.1/sweetalert2.js"></script>

<script>
	$('.custom-file-input').change(function (e) {
        var files = [];
        for (var i = 0; i < $(this)[0].files.length; i++) {
            files.push($(this)[0].files[i].name);
        }
        $(this).next('.custom-file-label').html(files.join(', '));
    });
</script>