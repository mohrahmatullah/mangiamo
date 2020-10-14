<!-- Header -->
@if(Request::is('/'))
<div class="w-100" style="background-color:#111;position: fixed;z-index: 2;height: 74px;border-bottom: solid 1px #e6e6e6;">
	<div class="container ">
		<nav class="header1 text-white">
			<div id="Sidenav" class="sidenav1" style="background-image: url(assets/img/bg-black.png);">
				<div class="px-3">
				<a href="javascript:void(0)" class="closebtn text-white" onclick="closeNav()">&times;</a>
				<a href="{{route('home')}}">
						<img src="{{ url('assets/img/logo-white.png') }} " class="of-cover mb-3" style="width: 90px">
				</a>
				<a href="{{route('abouts')}}" class="text-white sideborder ">ABOUT US</a>
				<a href="{{route('menu','buffet')}}" class="text-white sideborder ">MENU</a>
				<a href="{{route('gallery')}}" class="text-white sideborder ">GALLERY</a>
				<a href="{{route('promo')}}" class="text-white sideborder ">PROMOTION</a>
				<a href="{{route('news')}}" class="text-white sideborder ">BLOG</a>
				<a href="{{route('contact')}}" class="text-white sideborder ">CONTACT</a>
			</div>
			</div>

			<div class="navigation-bar py-2">
				<div class="row">
					<div class="col-4">
						<span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
					</div>
					<div class="col-4 text-center">
						<a href="{{route('home')}}">
							<img class="logo" src="{{ url('assets/img/logo-white.png') }} " >
						</a>
					</div>
					<div class="col-4">
					
					</div>
				</div>
			</div>
		</nav>
	</div>	 
</div>
<div style="width: 100%;height: 74px;"></div>
@else 

<div class="w-100" style="background-color:#fff;position: fixed;z-index: 2;height: 74px;border-bottom: solid 1px #e6e6e6;">
	<div class="container ">
		<nav class="header1 text-black">
			<div id="Sidenav" class="sidenav1 " style="background-color:#fff;">
				<div class="px-3">
				<a href="javascript:void(0)" class="closebtn text-black" onclick="closeNav()">&times;</a>
				<a href="{{route('home')}}">
						<img src="{{ url('assets/img/logo.png') }} " class="of-cover mb-3" style="width: 90px">
				</a>

				<a href="{{route('abouts')}}" class="text-black sideborder1 ">ABOUT US</a>
				<a href="{{route('menu','buffet')}}" class="text-black sideborder1 ">MENU</a>
				<a href="{{route('gallery')}}" class="text-black sideborder1 ">GALLERY</a>
				<a href="{{route('promo')}}" class="text-black sideborder1 ">PROMOTION</a>
				<a href="{{route('news')}}" class="text-black sideborder1 ">BLOG</a>
				<a href="{{route('contact')}}" class="text-black sideborder1 ">CONTACT</a>
			</div>
			</div>

			<div class="navigation-bar1 py-2" style="border-bottom: solid 1px #e6e6e6;">
				<div class="row">
					<div class="col-4">
						<span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
					</div>
					<div class="col-4 text-center">
						<a href="{{route('home')}}">
							<img class="logo" src="{{ url('assets/img/logo.png') }} " >
						</a>
					</div>
					<div class="col-4">
					
					</div>
				</div>
			</div>
		</nav>
	</div>	 
</div>
<div style="width: 100%;height: 74px;"></div>
@endif

<!-- /Header -->