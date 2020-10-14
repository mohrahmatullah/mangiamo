<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('dekstop.includes.essentialmeta')
    
    <!-- Import CSS -->
    @include('dekstop.includes.essentialcss')
  </head>
  @if(Request::is('/'))
  <body class="" style="background-image:url('assets/img/bg.png'); background-repeat: repeat;">
    
    <!-- Navbar Header -->
    @include('dekstop.includes.header')
    
    <!-- /Navbar Header -->
    
    <!-- Main Content -->
    @yield('content')
    <!-- /Main Content -->
    
    <!-- Footer -->
    @include('dekstop.includes.footer')
    <!-- Footer -->

    <!-- Import Javascript -->
    @include('dekstop.includes.essentialjs')

  </body>

  @else
  <body class="" style="background-image:url('../assets/img/bg.png'); background-repeat: repeat;">
    
    <!-- Navbar Header -->
    @include('dekstop.includes.header')
    
    <!-- /Navbar Header -->
    
    <!-- Main Content -->
    @yield('content')
    <!-- /Main Content -->
    
    <!-- Footer -->
    @include('dekstop.includes.footer')
    <!-- Footer -->

    <!-- Import Javascript -->
    @include('dekstop.includes.essentialjs')

  </body>
  @endif
</html>