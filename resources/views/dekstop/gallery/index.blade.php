@extends('dekstop.includes.default')
@section('title', 'Gallery | Mangiamo')
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
							<li class="breadcrumb-item f-brandonSL-200 active" aria-current="page">Gallery</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- /Breadcrumb -->

	<!-- List Gallery -->
	<section class="py-5">
		<div class="container">
			<div class="gallery-l">
				@foreach($gallery as $gl)
					<a data-fancybox="gallery" href="{{ env('URL_MEDIA').'/'.$gl->image }}"><img src="{{ env('URL_MEDIA').'/'.$gl->image }}" class="w-100 h-100 mb-3"></a>
				@endforeach      
			</div>
		</div>
	</section>
	<!-- /List Gallery -->

</main>
<!-- /Main Content -->
@endsection