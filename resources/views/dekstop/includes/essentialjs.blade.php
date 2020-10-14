<!-- Import Jquery 3.3.1 -->
<script type="text/javascript" src="{{ url('assets/js/jquery-3.3.1.min.js') }}"></script>

<!-- Import Bootstrap JS -->
<script type="text/javascript" src="{{ url('assets/js/bootstrap.min.js') }}"></script>

<!-- Import Slick JS -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Import Nprogress JS -->
<script type="text/javascript" src="{{ url('assets/js/nprogress/nprogress.js') }}"></script>

<!-- Fancybox -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!-- Import Javascript -->
<script type="text/javascript" src="{{ url('assets/js/script.js') }}"></script>

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
    /* Script JS Pagging More */
	$(document).ready(function(){
	  $(document).on('click', '#loadmore',function(event)
	  {
	    event.preventDefault();
	    var myurl = $(this).attr('href');
	    var page=$(this).attr('href').split('page=')[1];
	    getData(page);
	  });
	});

	function getData(page){
	  $.ajax(
	  {
	    url: '?page=' + page,
	    type: "get",
	    datatype: "html",
	    beforeSend: function () {
	      NProgress.start();
	    },
	    success: function (data) {
	      $("#load-more").remove();
	      $("#list-terkini-ajax").append(data);
	      NProgress.done();
	    }                       
	  })

	  .fail(function(jqXHR, ajaxOptions, thrownError)
	  {
	    alert('No response from server');
	  });
	}
	/* \Script JS Pagging More */
</script>