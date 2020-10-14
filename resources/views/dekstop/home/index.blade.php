@extends('dekstop.includes.default')
@section('title', 'Home | Mangiamo')
@section('content')
<!-- Main Content -->
<main class="" style="top: 0px !important">

	<!--Slider Banner  -->
	<section>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<img src="assets/img/slide-homepage1.png" class="of-cover w-100 carousel-item active">
				<img src="assets/img/slide-homepage1.png" class="of-cover w-100 carousel-item">
			</div>
		</div>
	</section>
	<!--Slider Banner  -->

	<div class="l-head"></div>

	<!--About-->
	<section class="my-5">
		<!-- <img src="assets/img/flower.png" class="position-absolute" style="width: 150px; left: -4rem; margin-top: -6rem; z-index: -1;"> -->
		<img src="assets/img/tepung.png" class="position-absolute" style="width: 150px; left: -3rem; margin-top: 3rem">
		<div class="container">
			<div class="text-center my-5">
				<h3 class="f-bigNoodle-400 fs-40">OUR STORY</h3>
				<p class="f-brandonSM-200 fs-17 pb-4">{{$about_homepage->excerpt}}</p>
				<a href="{{ route('abouts') }}" class="btn-readMore f-brandonSB-200">READ MORE</a>
			</div>
		</div>
	</section>
	<!--About-->

	<!-- Menu -->
	<section>
		<div class="row mx-0 px-0">
			@foreach($menu_homepage as $mh)
			<div class="content-menucat px-0">
				<div id="layer1" class="layer" style="">
					<div class="txt-menucat" style="">
						<p class="f-bigNoodle-400 fs-40 text-white my-0 d-block" style="">{{ $mh->name}} </p>
						<div class="fullmenu"><a href="{{ route('menu', $mh->slug) }}" class="btn-fullMenu f-brandonSL-200">Full Menu</a></div>
					</div>
				</div>
				<img src="{{ env('URL_MEDIA').'/'.$mh->image }}" class="of-cover w-100 h-100">
			</div>
			@endforeach
		</div>
	</section>

	<section class="container mt-5">
		<div class="row pt-5 px-5">

			<div class="col-3 text-center">
				<img src="{{ env('URL_MEDIA').'/'.$about_second1->image }}" class="h-auto" style="width: 100px;">
				<h2 class="f-bigNoodle-400 pt-2 text-dark-grey" style="">{{$about_second1->title}}</h2>
				<h6 class="f-brandonSL-200">{{$about_second1->body}}</h6>
			</div>

			<div class="col-3 text-center">
				<img src="{{ env('URL_MEDIA').'/'.$about_second2->image }}" class="h-auto" style="width: 100px;">
				<h2 class="f-bigNoodle-400 pt-2 text-dark-grey" style="">{{$about_second2->title}}</h2>
				<h6 class="f-brandonSL-200">{{$about_second1->body}}</h6>
			</div>

			<div class="col-3 text-center">
				<img src="{{ env('URL_MEDIA').'/'.$about_second3->image }}" class="h-auto" style="width: 100px;">
				<h2 class="f-bigNoodle-400 pt-2 text-dark-grey" style="">{{$about_second3->title}}</h2>
				<h6 class="f-brandonSL-200">{{$about_second3->body}}</h6>
			</div>

			<div class="col-3 text-center">
				<img src="{{ env('URL_MEDIA').'/'.$about_second4->image }}" class="h-auto" style="width: 100px;">
				<h2 class="f-bigNoodle-400 pt-2 text-dark-grey" style="">{{$about_second4->title}}</h2>
				<h6 class="f-brandonSL-200">{{$about_second4->body}}</h6>
			</div>
		</div>
	</section>

	<section>
		<div class="w-100" style="background-image: url(assets/img/bg-menu.png);background-size: 100%; height: auto; background-repeat: no-repeat;">
			<div class="" style="padding-top: 13rem; padding-bottom: 2rem">
			<h3 class="text-center text-gold mb-5 fs-50">BUFFET MENU</h3>
			<div class="align-items-center">
				<div class="row mx-0 slider-buffet">
					@foreach($buffet_homepage as $bf)
					<div class="col-2 px-0 slide">
						<img src="{{ env('URL_MEDIA').'/'.$bf->images }}" class="of-cover" style="width: 85%">
					</div>
					@endforeach
				</div>
			</div>
			</div>
		</div>
	</section>
	<!-- Menu -->

	<!-- Chef -->
	<section>
		<div class="white" style="">
			<img src="assets/img/daun-blur.png" class="position-absolute" style="width: 120px; left: -2rem; margin-top: 3rem">
			<img src="assets/img/saos.png" class="position-absolute" style="width: 150px; left: -4rem; margin-top: 15rem">
			<img src="assets/img/flower-r.png" class="position-absolute" style="width: 120px; right: 0rem; margin-top: 0rem">
			<!-- <img src="assets/img/daun-blur.png" class="position-absolute" style="width: 120px; right: 0rem; margin-top: 10rem">
			<img src="assets/img/tepung.png" class="position-absolute" style="width: 150px; right: 0rem; margin-top: 15rem"> -->
			<div class="row mx-0">
				<div class="col-6 align-items-center pb-5 px-5" style="padding-top: 5rem!important; padding-left: 10rem !important">
					<h1 class="text-gold f-brushScript-400">{{$chef->title}}</h1>
					<h2 class="py-2">We have it all here!</h2>
					<p class="f-brandonSM-200 fs-18 text-grey">{{$chef->body}}</p>
					<h1 class="f-frenchScript-400 text-grey" style="transform: rotate(-10deg);">{{$chef->name}}</h1>
				</div>
				<div class="col-6 px-0 text-center">
					<img src="{{ env('URL_MEDIA').'/'.$chef->image }}" class="of-cover" style="width: 300px">
				</div>
			</div>
		</div>
	</section>
	<!-- /Chef -->
	
	<!-- Testimonial -->
	<section>
		<div class="py-3" style="background-image: url(assets/img/bg-testi-new.png);background-size: 100%; height: 500px; background-repeat: no-repeat;">
			<div class="container text-center text-white align-items-center py-5 px-5">
				<h3 class="f-bigNoodle-400 fs-50 pt-4" style="letter-spacing: 2px;">TESTIMONIAL</h3>
				<h3 class="f-brushScript-400" style="color: #ff3737 !important">What People Say</h6>
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						@foreach($testimonial_homepage as $index => $th)
						<div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">							
							{!! str_replace('<p>','<p class="py-5 f-brandonSM-200 fs-18 text-white">',$th -> body) !!}
							<h5 class="py-1 f-bigNoodle-200" style="letter-spacing: 2px;">{{ $th -> author }}</h5>
							<h6 style="color: #ACB0b3 !important">{{ $th -> footer }}</h6>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial -->

	<!-- Maps -->
	<section>
		<div class="" style="height: 400px">
			<iframe width="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Cluster%20Paramount%20Hill%20Golf%20Jalan%20Gading%20Golf%20Timur%20Blok%20GGT%20No%20112&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="" style="height: 100%"></iframe>
		</div>
	</section>
	<!-- /Maps -->

</main>
<!-- /Main Content -->
@endsection