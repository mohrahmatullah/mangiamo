@extends('dekstop.includes.default')
@section('title', 'Menu | Mangiamo')
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
							<li class="breadcrumb-item f-brandonSL-200 active" aria-current="page">Menu</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- /Breadcrumb -->

	<!-- Menu Header -->
	<section>
		<div>
			<img src="{{ url('assets/img/bg-page-menu.png') }}" class="of-cover w-100">
			<div class="text-right">
				<img src="{{ url('assets/img/flower-r.png') }}" style="width: 200px">
			</div>
		</div>
	</section>
	<!-- /Menu Header -->

	<!-- Content -->
	<section>
		<div class="container">

			{{--<div class="row text-center">--}}
			{{--	<div class="px-4" style="width: 20%">--}}
			{{--		<a href="{{ route('menu','buffet') }}" class="btn-menu d-block"> Buffet</a>--}}
			{{--	</div>--}}
			{{--	<div class="px-4" style="width: 20%">--}}
			{{--		<a href="{{ route('menu','pizza') }}" class="btn-menu d-block"> Pizza</a>--}}
			{{--	</div>--}}
			{{--	<div class="px-4" style="width: 20%">--}}
			{{--		<a href="{{ route('menu','pasta') }}" class="btn-menu d-block"> Pasta</a>--}}
			{{--	</div>--}}
			{{--	<div class="px-4" style="width: 20%">--}}
			{{--		<a href="{{ route('menu','salad') }}" class="btn-menu d-block"> Salad</a>--}}
			{{--	</div>--}}
			{{--	<div class="px-4" style="width: 20%">--}}
			{{--		<a href="{{ route('menu','dessert') }}" class="btn-menu d-block"> Dessert</a>--}}
			{{--	</div>--}}
			{{--</div>--}}

			<div class="row text-center">
				@foreach($menu_category->take(1) as $mf)
					@php
						$first_cat = $mf->id;
					@endphp
				@endforeach
				@foreach($menu_category as $mc)
					<input type="hidden" value="{{ $mc->id }}">
					<input type="hidden" id="ajaxURL" value="{{ config('app.url').'/ajax/get-menus-by-categories' }}">
					<div class="px-4"  style="width: 20%">

						{{-- <div class="btn-menu @if($mc->id == $first_cat) active @endif" id="btn_{{$mc->id}}" onClick="dynamicMenus({{ $mc->id }})">{{$mc->name}} </div> --}}
						<div class="btn-menu {{ ($mc->slug == request()->segment(2)) ? 'active' : '' }}" id="btn_{{$mc->id}}" onClick="dynamicMenus({{ $mc->id }})">{{$mc->name}} </div>
					</div>
			@endforeach
			</div>

			<!-- {{--
			<div class="row text-center">				
				@foreach($menu_category as $mc)
				<input type="hidden" value="{{ $mc->id }}">
				<div class="px-4"  style="width: 20%">
					<div class="btn-menu" onClick="dynamicPosts({{ $mc->id }})">{{$mc->name}} </div>
				</div>
				@endforeach
				<div class="px-4"  style="width: 20%">
					<div class="btn-menu"> Pizza</div>
				</div>
				<div class="px-4"  style="width: 20%">
					<div class="btn-menu"> Pasta</div>
				</div>
				<div class="px-4"  style="width: 20%">
					<div class="btn-menu"> Salad</div>
				</div>
				<div class="px-4"  style="width: 20%">
					<div class="btn-menu"> Dessert</div>
				</div>
			</div>--}} -->

			<div class="my-5 text-center" id="menuContainerDiv">
				<div id="menuDiv" class="row">
					@foreach( $menu_every_slug as $mes)
						<div class="col-3 py-3">
							<a href="{{ route('menu-detail' , $mes->slug) }}" class="text-black">
								<img src="{{ env('URL_MEDIA').'/'.$mes->images }}" class="of-cover w-100">
								<h3 class="f-brandonSM-200 fs-20 pt-3">{{ $mes->title }}</h3>
							</a>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- /Content -->
</main>
<!-- /Main Content -->
@endsection