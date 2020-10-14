@extends('mobile.includes.default')
@section('title', 'Menu | Mangiamo')
@section('content')

<!-- Main Content -->
<main class="">
	<section class="mb-3">
		<div>
			<img src="{{ url('assets/img/bg-page-menu.png') }}" class="of-cover w-100" >
		</div>
	</section>

<!-- {{-- <div class="selectbox">
    <form>
		<select  name="Menu" class="custom-select mb-3">
			@foreach($menu_category as $mc)
				<option value="pz" onClick="dynamicPosts({{ $mc->id }})">{{$mc->name}}</option>
			@endforeach
		</select>
	</form>
</div> --}} -->

<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<input type="hidden" id="ajaxURL" value="{{ config('app.url').'/ajax/get-menus-by-categories-m' }}">
				<select id="selectMenusCtgrMobile" name="Menu" class="mb-3 form-control wide" onchange="dynamicMenusMobile()">
					@foreach($menu_category as $mc)
						<option value="{{ $mc->id }}" {{ ($mc->slug == request()->segment(2)) ? 'selected' : '' }} >{{$mc->name}}</option>
					@endforeach
				</select>
			</div>
		</div>
	</div>
</section>


<div class="container" id="menuContainerDiv">
	<div class="row py-3" id="menuDiv">
		@foreach( $menu_every_slug as $mes)
			<div class="col-6 text-center mb-3">
				<a href="{{ route('menu-detail' , $mes->slug) }}" class="text-black">
					<img src="{{ env('URL_MEDIA').'/'.$mes->images }}" class="of-cover w-100">
					<h3 class="f-brandonSM-200 fs-20 pt-3" style="">{{ $mes->title }}</h3>
				</a>
			</div>
		@endforeach
		<!-- {{-- <div class="grid-item">
			<a href="{{ route('menu-detail') }}">
				<img src="assets/img/pizza2.png" class="of-cover w-100">
			</a>
			<h3 class="f-brandonSM-200 fs-20 pt-3" style="">Pizza Mangiamo Cheese</h3>
		</div>
	
		<div class="grid-item">
			<a href="{{ route('menu-detail') }}">
				<img src="assets/img/pizza1.png" class="of-cover w-100">
			</a> 
			<h3 class="f-brandonSM-200 fs-20 pt-3" style="">Pizza Mangiamo Cheese</h3>
		</div>
	
		<div class="grid-item">
			<a href="{{ route('menu-detail') }}">
				<img src="assets/img/pizza2.png" class="of-cover w-100">
			</a> 
			<h3 class="f-brandonSM-200 fs-20 pt-3" style="">Pizza Mangiamo Cheese</h3>
		</div>
	
		<div class="grid-item">
			<a href="{{ route('menu-detail') }}">
				<img src="assets/img/pizza1.png" class="of-cover w-100">
			</a>
			<h3 class="f-brandonSM-200 fs-20 pt-3" style="">Pizza Mangiamo Cheese</h3>
		</div>

		<div class="grid-item">
			<a href="{{ route('menu-detail') }}">
				<img src="assets/img/pizza2.png" class="of-cover w-100">
			</a>
			<h3 class="f-brandonSM-200 fs-20 pt-3" style="">Pizza Mangiamo Cheese</h3>
		</div>   --}} -->
	
	
	</div>
</div>	
</main>
@endsection