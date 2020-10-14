@extends('dekstop.includes.default')
@section('title', 'Abouts | Mangiamo')
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
							<li class="breadcrumb-item f-brandonSL-200 active" aria-current="page">About us</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- /Breadcrumb -->

	<!-- Top Description -->
	<section class="mb-3" style="height: 350px;">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12">
					<div class="row justify-content-center">
						<div class="col-10">
							<h1 class="f-brandonSM-200 mb-4 wow fadeInLeft">{{$about_first->title}}</h1>
							<h3 class="f-brandonSM-200 mb-4 wow fadeInLeft" data-wow-delay=".3s">{{$about_first->excerpt}}</h3>
							<h6 class="f-brandonSL-200 mb-4 wow fadeInLeft" data-wow-delay=".5s">{{$about_first->body}}</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Top Description -->

	<!-- Wall Image -->
	<section>
		<img src="{{ env('URL_MEDIA').'/'.$about_first->image }}" class="w-100 h-auto">
	</section>
	<!-- /Wall Image -->

	<!-- Why Mangiaomo -->
	<section class="py-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-8">
					<div class="row justify-content-center">
						<div class="col-6 col-xl-3 text-center">
							<!-- <img src="./assets/img/ab4.png" class="h-auto" style="width: 100px;"> -->
							<img src="{{ env('URL_MEDIA').'/'.$about_second1->image }}" class="h-auto" style="width: 100px;">
							<h5 class="text-uppercase f-bigNoodle-200">{{$about_second1->title}}</h5>
							<h6 class="f-brandonSL-200 mb-4">{{$about_second1->body}}</h6>
						</div>
						<div class="col-6 col-xl-3 text-center">
							<img src="{{ env('URL_MEDIA').'/'.$about_second2->image }}" class="h-auto" style="width: 100px;">
							<h5 class="text-uppercase f-bigNoodle-200">{{$about_second2->title}}</h5>
							<h6 class="f-brandonSL-200 mb-4">{{$about_second2->body}}</h6>
						</div>
						<div class="col-6 col-xl-3 text-center">
							<img src="{{ env('URL_MEDIA').'/'.$about_second3->image }}" class="h-auto" style="width: 100px;">
							<h5 class="text-uppercase f-bigNoodle-200">{{$about_second3->title}}</h5>
							<h6 class="f-brandonSL-200 mb-4">{{$about_second3->body}}</h6>
						</div>
						<div class="col-6 col-xl-3 text-center">
							<img src="{{ env('URL_MEDIA').'/'.$about_second4->image }}" class="h-auto" style="width: 100px;">
							<h5 class="text-uppercase f-bigNoodle-200">{{$about_second4->title}}</h5>
							<h6 class="f-brandonSL-200 mb-4">{{$about_second4->body}}</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Why Mangiaomo -->

	<!-- Content -->
	<section>
		<div class="container">
			<div class="row mb-5">
				<div class="col-12">
					<img src="{{ env('URL_MEDIA').'/'.$about_third->image }}" class="w-100 h-auto">
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-12">
					<div class="row justify-content-center">
						<div class="col-10">
							<h1 class="f-brandonSM-200 mb-4 wow fadeInDown">{{$about_third->title}}</h1>
							<h3 class="f-brandonSM-200 mb-4 wow fadeInDown" data-wow-delay=".3s">{{$about_third->excerpt}}</h3>
							<h6 class="f-brandonSL-200 mb-4 wow fadeInDown" data-wow-delay=".5s">{{$about_third->body}}</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-12">
					<div class="w-100" style="height: 1px;background-color:rgba(0,0,0,.3)"></div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-12">
					<div class="row justify-content-center">
						<div class="col-10">
							<h1 class="f-brandonSM-200 mb-4">Our Standarts</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-12">
					<div class="row">
						<div class="col-12 col-xl-4">
							<div class="d-flex flex-row">
								<div class="" style="width: 245px;height: 55px;margin-right: .5rem;">
									<!-- <img src="./assets/img/1.png" class="w-100 h-auto"> -->
									<img src="{{ env('URL_MEDIA').'/'.$about_fourth1->image }}" class="w-100 h-auto">
								</div>
								<div class="">
									<h3 class="f-brandonSM-200 mb-4">{{$about_fourth1->title}}</h3>
									<h6 class="f-brandonSL-200 mb-4">{{$about_fourth1->body}}</h6>
								</div>
							</div>
						</div>
						<div class="col-12 col-xl-4">
							<div class="d-flex flex-row">
								<div class="" style="width: 245px;height: 55px;margin-right: .5rem;">
									<img src="{{ env('URL_MEDIA').'/'.$about_fourth2->image }}" class="w-100 h-auto">
								</div>
								<div class="">
									<h3 class="f-brandonSM-200 mb-4">{{$about_fourth2->title}}</h3>
									<h6 class="f-brandonSL-200 mb-4">{{$about_fourth2->body}}</h6>
								</div>
							</div>
						</div>
						<div class="col-12 col-xl-4">
							<div class="d-flex flex-row">
								<div class="" style="width: 245px;height: 55px;margin-right: .5rem;">
									<img src="{{ env('URL_MEDIA').'/'.$about_fourth3->image }}" class="w-100 h-auto">
								</div>
								<div class="">
									<h3 class="f-brandonSM-200 mb-4">{{$about_fourth3->title}}</h3>
									<h6 class="f-brandonSL-200 mb-4">{{$about_fourth3->body}}</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Content -->

	<!-- Our Team -->
	<section class="abt-team">
		<div class="container h-100">
			<div class="row align-items-center h-100">
				<div class="col-12 col-xl-4">
					<h3 class="fw-400 mb-4">{{$about_fifth->title}}</h3>
					<h6 class="fw-400 mb-4">{{$about_fifth->excerpt}}</h6>
					<h6 class="fw-200 mb-5">{{$about_fifth->body}}</h6>
					<!-- <a href="/" class="py-2 px-4 text-black text-uppercase" style="border: 1px solid red;border-radius: 3px;">Our Team</a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- /Our Team -->

	<!-- Gallery -->
	<section class="py-5">
		<div class="container">
			<div class="row mb-4">
				<div class="col-12 text-center">
					<h1 class="f-brandonSM-200 mb-4 text-uppercase">Gallery</h1>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-12 col-xl-7">
					<img src="./assets/img/g.png" class="w-100 of-cover abt-gal-img">
				</div>
				<div class="col-12 col-xl-5 px-3 px-xl-5">
					<h6 class="f-brandonSM-200 mb-4">{{$about_sixth->excerpt}}</h6>
					<h6 class="f-brandonSM-200 mb-4">{{$about_sixth->body}}</h6>
					<a href="{{route('gallery')}}" class="py-2 px-4 text-black text-uppercase d-inline-block" style="border: 1px solid #E34C26;border-radius: 3px;">Gallery</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /Gallery -->

	<!-- Careers -->
	<section class="abt-careers py-5">
		<div class="container">
			<div class="row py-xl-5"> 
				<div class="col-12 text-center">
					<h3 class="f-brandonSM-200 mb-4">{{$about_seventh->excerpt}}</h3>
					<h6 class="f-brandonSL-200 mb-5">{{$about_seventh->body}}</h6>
					<a href="{{route('career')}}" class="py-2 px-4 text-black text-uppercase d-inline-block" style="border: 1px solid #E34C26;border-radius: 3px;">Careers</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /Careers -->

</main>
<!-- /Main Content -->
@endsection