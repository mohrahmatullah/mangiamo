<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('mobile.includes.essentialmeta')
    
    <!-- Import CSS -->
    @include('mobile.includes.essentialcss')
  </head>
  <body class="" style="background-image:url('assets/img/bg.png'); background-repeat: repeat;">
    
    <!-- Navbar Header -->
    @include('mobile.includes.header')
    
    <!-- /Navbar Header -->
    
    <!-- Main Content -->
    @yield('content')
    <!-- /Main Content -->
    
    <!-- Footer -->
    @include('mobile.includes.footer')
    <!-- Footer -->

    <!-- Import Javascript -->
    @include('mobile.includes.essentialjs')

  </body>
</html>