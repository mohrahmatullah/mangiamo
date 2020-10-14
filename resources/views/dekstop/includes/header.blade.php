<!-- Header -->
@if(Request::is('/'))
<nav class="nav-header-index">
  <ul class="text-center menu-header-index text-black list-unstyled justify-content-between align-items-center">
              
    <li class="px-4"><a href="{{ route('abouts') }}" class="menu-text">ABOUT US</a></li>           
    <li class="px-4"><a href="{{ route('menu', 'buffet') }}" class="menu-text">MENU</a></li>            
    <li class="px-4"><a href="{{ route('gallery') }}" class="menu-text">GALLERY</a></li>
    <li class="logo-header">
      <a href="{{ route('home') }}" class="mx-2">
        <img src="{{ url('assets/img/logo-white.png') }}" class="" style="width: 150px; height: auto;">
      </a>
    </li>             
    <li class="px-4"><a href="{{ route('promo') }}" class="menu-text">PROMOTION</a></li>            
    <li class="px-4"><a href="{{ route('news') }}" class="menu-text">BLOG</a></li>            
    <li class="px-4"><a href="{{ route('contact') }}" class="menu-text">CONTACT</a></li>            
  </ul>
</nav>
@else
<nav class="nav-header white">
  <ul class="text-center menu-header text-black list-unstyled justify-content-between align-items-center mb-0">
              
    <li class="px-4"><a href="{{ route('abouts') }}" class="mx-2 f-dinpro-600">ABOUT US</a></li>           
    <li class="px-4"><a href="{{ route('menu', 'buffet') }}" class="mx-2 f-dinpro-600">MENU</a></li>            
    <li class="px-4"><a href="{{ route('gallery') }}" class="mx-2 f-dinpro-600">GALLERY</a></li>
    <li >
      <a href="{{ route('home') }}" class="mx-2">
        <img src="{{ url('assets/img/logo.png') }}" class="logo-header" style="width: 80px; height: auto;">
      </a>
    </li>             
    <li class="px-4"><a href="{{ route('promo') }}" class="mx-2 f-dinpro-600">PROMOTION</a></li>            
    <li class="px-4"><a href="{{ route('news') }}" class="mx-2 f-dinpro-600">BLOG</a></li>            
    <li class="px-4"><a href="{{ route('contact') }}" class="mx-2 f-dinpro-600">CONTACT</a></li>            
  </ul>

</nav>
<div class="space-header"></div>
@endif
<!-- /Header -->