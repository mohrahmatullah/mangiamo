@extends('dekstop.includes.default')
@section('title', 'Menu-detail | Mangiamo')
@section('content')
<!-- Main Content -->
<main>
	<!-- Flower Header -->
	<div class="d-flex justify-content-between mx-0" style="margin-bottom: -3rem">
		<div class="">
			<img src="{{ url('assets/img/flower.png') }}" style="width: 250px; margin-top: -50%; margin-left: -50%">
		</div>
		<div class="text-right mx-0">
			<img src="{{ url('assets/img/flower-r.png') }}" style="width: 200px;">
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
							<li class="breadcrumb-item f-brandonSL-200"><a href="{{ route('menu' , 'buffet') }}">Menu</a></li>
							<li class="breadcrumb-item f-brandonSL-200 active" aria-current="page">Pizza</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- /Breadcrumb -->

	<section>
		<div class="container">
			<div class="row pb-5 mx-0">
				<div class="col-6 w-100 text-center" style="">
					<img src="{{ env('URL_MEDIA').'/'.$menu_every_slug->images }}" class="of-cover w-75">
				</div>				
	
				<div class="col-6 pt-3 pb-5">
					<label class="btn-label mb-4">{{ $menu_every_slug->name }}</label>
					<h2 class="f-brandonSBlack-400 fs-30">{{ $menu_every_slug->title }}</h2>
					<h3 class="f-brandonSM-200 fs-20">Details</h3>
					<hr>
					<p class="f-brandonSL-200 fs-18">{!! $menu_every_slug->description !!}</p>
				</div>
			</div>				
		</div>
	</section>

	<!-- Photo -->
	
	<section>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">			
				@foreach($mainslider as $index => $ms)
				@php $img = str_replace('\\', '/', $ms); @endphp
				<div class="carousel-item <?= $index == 0 ? 'active' : '' ?>" style="height: 400px">
					<a class="" data-fancybox="gallery" href="{{ env('URL_MEDIA').'/'.$img }}">
						<img src="{{ env('URL_MEDIA').'/'.$img }}" class="of-cover w-100 h-100">
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	
	<!-- /Photo -->
</main>
<!-- /Main Content -->
@endsection