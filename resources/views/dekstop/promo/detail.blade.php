@extends('dekstop.includes.default')
@section('title', 'Promo | Mangiamo')
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
							<li class="breadcrumb-item f-brandonSL-200"><a href="{{ route('promo') }}">Promo</a></li>
							<li class="breadcrumb-item f-brandonSL-200 active" aria-current="page">Holiday Promo</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- /Breadcrumb -->

	<section class="py-3 py-xl-5">
		<div class="container">
			<div class="row mb-3 mb-xl-5">
				<div class="col-6 text-center">
					<img src="{{ env('URL_MEDIA').'/'.$promo_detail->images }}" class="of-cover w-100 h-100">
				</div>				
				<div class="col-6 py-2">
					<label class="btn-label my-4">{{$promo_detail->caption}} </label>
					<h2 class="f-brandonSBlack-400 fs-30 text-uppercase">{{$promo_detail->title}}</h2>
					<h5 class="f-brandonSM-200 fs-20">Details</h5>
					<p class="">
						{!! str_replace('<p>','<p class="f-brandonSL-200 fs-18">',$promo_detail -> description) !!}
					</p>
				</div>				
			</div>
		</div>
	</section>
</main>
<!-- /Main Content -->
@endsection