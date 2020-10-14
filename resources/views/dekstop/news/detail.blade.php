@extends('dekstop.includes.default')
@section('title', 'Blog | Mangiamo')
@section('content')
<!-- Main Content -->
<main>	
	<!-- Flower Header -->
	<div class="d-flex justify-content-between mx-0" style="margin-bottom: -3rem">
		<div class="">
			<img src="{{ url('./assets/img/flower.png') }}" style="width: 250px; margin-top: -50%; margin-left: -50%">
		</div>
		<div class="text-right mx-0">
			<img src="{{ url('./assets/img/flower-r.png') }}" style="width: 200px;">
		</div>
	</div>
	<!-- Flower Header -->

	<!-- Breadcrumb -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb transparent">
							<li class="breadcrumb-item f-brandonSL-200"><a href="{{ route('home') }}">Home</a></li>
							<li class="breadcrumb-item f-brandonSL-200"><a href="{{ route('news') }}">Blog</a></li>
							<li class="breadcrumb-item f-brandonSL-200 active" aria-current="page">Denada ke mangiamo</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- /Breadcrumb -->

	<!-- Content -->
	<section class="py-5">
		<div class="container">
			<div class="row mb-3 mb-xl-5">
				<div class="col-12 text-center">
					<img src="{{ env('URL_MEDIA').'/'.$blog_detail->image }}" class="of-cover w-100 h-100">
				</div>
			</div>
			<div class="row mb-3 mb-xl-5 justify-content-center">
				<div class="col-12 col-xl-10">
					<h2 class="f-brandonSBlack-400 fs-30 mb-4 text-center">{{$blog_detail->title}}</h2>				
					{!! str_replace('<p>','<p class="f-brandonSL-200 fs-18 text-justify">',$blog_detail->description) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="slider-blog owl-carousel owl-theme">
						@foreach($slider_menu as $sm)
						<div class="item">
							<a data-fancybox="gallery" href="{{ env('URL_MEDIA').'/'.$sm }}" class="mb-3"><img src="{{ env('URL_MEDIA').'/'.$sm }}" class="of-cover w-100" style="height: 250px;"></a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- /Content -->
</main>
<!-- /Main Content -->
@endsection