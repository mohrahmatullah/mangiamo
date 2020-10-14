@extends('dekstop.includes.default')
@section('title', 'Promo | Mangiamo')
@section('content')
<!-- Main Content -->
<main>
	
	<!-- Flower Header -->
	<div class="d-flex justify-content-between mx-0" style="margin-bottom: -3rem">
		<div class="">
			<img src="assets/img/flower.png" style="width: 250px; margin-top: -50%; margin-left: -50%">
		</div>
		<div class="text-right mx-0">
			<img src="assets/img/flower-r.png" style="width: 200px;">
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
							<li class="breadcrumb-item f-brandonSL-200 active" aria-current="page">Promo</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- /Breadcrumb -->

	<section class="container pb-5">
		<div class="row px-5 text-center">
			@foreach($promo as $pr)
			<div class="col-6 mb-3">
				<a href="{{ 'promo-detail/'.$pr->slug }}">
					<img src="{{ env('URL_MEDIA').'/'.$pr->images }}" class="of-cover w-100">
					<h2 class="f-brandonSM-200 fs-18 pt-4 text-uppercase text-black">{{$pr->title}} </h2>
				</a>
			</div>
			@endforeach		
		</div>
		<div id="list-terkini-ajax">
	        <div class="row justify-content-center">
			    <div class="col-10 text-center" id="load-more">
			        @php $paginator = $promo; @endphp
		            {{ $paginator->appends([])->render('dekstop.layouts.paggingmore') }}
		        </div>
			</div>
		</div>
	</section>

	
</main>
<!-- /Main Content -->
@endsection