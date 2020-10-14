@extends('dekstop.includes.default')
@section('title', 'Contact | Mangiamo')
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
							<li class="breadcrumb-item f-brandonSL-200 active" aria-current="page">Contact</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- /Breadcrumb -->

	<!-- Content -->

	<section>
		<section class="container">
			<div class="row mb-5 px-5">
				<div class="col-6 px-5">
					<h4 class="f-brandonSM-200">Contact us</h4>
					<p class="f-brandonSM-200">{{$contact_us->body}}</p>
					<p class="f-brandonSM-200 my-0">Telp: <a href="tel:02154664353" class="text-black">{{$contact_us->phone}}</a></p>
					<p class="f-brandonSM-200"><a href="mailto:mangiamobuffet@admin.com" class="text-orange">{{$contact_us->email}}</a></p>
					<p class="f-brandonSM-200 my-0">Want to join the team?</p>
					<a href="{{ route('career') }}" class="f-brandonSM-200 text-orange">Apply today</a>
				</div>

				<div class="col-6 px-5">
					<h4 class="f-brandonSM-200">Working hours</h4>
					<p class="f-brandonSM-200">{{$working_hours->body}}</p>
					<p class="f-brandonSM-200 my-0">Reservation</p>
					<p class="f-brandonSM-200">{{$working_hours->phone}}</p>
					<a href="https://wa.me/628543684757" class="btn-reservation f-brandonSB-200 py-2 px-4">MAKE ONLINE RESERVATION</a>
				</div>
			</div>
		</section>

		<section class="my-0">
			<div class="my-0" style=" height: 400px">
				<iframe width="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Cluster%20Paramount%20Hill%20Golf%20Jalan%20Gading%20Golf%20Timur%20Blok%20GGT%20No%20112&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="" style="height: 100%"></iframe>
			</div>
		</section>

		<section class="py-5" style="background-image: url('assets/img/bg-contact.png'); background-size: 100%; height: 450px; background-repeat: no-repeat;background-color: #F8F9F1;">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12 col-xl-5">
						<h4 class="f-brandonSM-200">Get in touch</h4>
						<p class="f-brandonSL-200 text-justify">{{$get_in_touch->excerpt}}</p>
						<p class="f-brandonSL-200 text-justify">{{$get_in_touch->body}}</p>
					</div>
					<form id="formSaveMessage" method="POST" class="col-12 col-xl-7">
						{{ csrf_field() }}
						<input class="input-contact" type="text" id="MsgName" name="name" placeholder="Name" >
						<input class="input-contact" type="text" id="MsgPhone" name="phone" placeholder="Phone" >
						<input class="input-contact" type="text" id="MsgEmail" name="email" placeholder="E-mail" >
						<textarea class="textarea-contact mb-3" id="MsgMessage" type="text" name="message" placeholder="Your Message"></textarea>
						<input type="hidden" id="MsgUrl" value="{{ URL::to('/') }}">						
						<button type="submit" class="btn-submit btn f-brandonSB-200" id="MsgSubmit">Submit</button>
					</form>
				</div>
			</div>
		</section>
	</section>

	<!-- /Content -->
	
</main>
<!-- /Main Content -->
@endsection