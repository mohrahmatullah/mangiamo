@extends('mobile.includes.default')
@section('title', 'Home | Mangiamo')
@section('content')

<!-- Main Content -->
<main class="" style="top: 0px !important">
    <!--Slider Banner  -->
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <img src="assets/img/slide-homepage.png" class="of-cover w-100 carousel-item active">
                <img src="assets/img/slide-homepage.png" class="of-cover w-100 carousel-item">
            </div>
        </div>
    </section>
    <!--Slider Banner  -->

    <div class="l-head-m"></div>

    <!--About-->
    <section class="container mb-4">
        <div class="text-center py-3">
            <h3 class="f-bigNoodle-400 fs-40">OUR STORY</h3>
            <p class="f-brandonSM-200 fs-17 pb-4">{{$about_homepage->excerpt}} </p>
        <a href="{{route('abouts')}}" class="btn-readMore f-brandonSB-200">READ MORE</a>
        </div>
    </section>
    <!--About-->
    
    <!-- Menu -->
    <section>
    <div id="menu-c-mobile" class="carousel slide" data-ride="carousel" >
        
        <div class="carousel-inner">
        @foreach($menu_homepage as $index => $mh)
        
            <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>" style="width:100%; height:600px">
                <a  class="position-relative" href="{{ route('menu', $mh->slug) }}"> 
                    <div id="menu-mobile" class="crsl" style="">
                        <div class="crsl1" style="">
                            <p class="f-bigNoodle-400 fs-40 text-white my-0 d-block" style="">{{ $mh->name}} </p>
                        </div>
                    </div>
                    <img src="{{ env('URL_MEDIA').'/'.$mh->image }}" class="of-cover w-100 h-100">
                </a>
            </div>
        
        @endforeach
        </div>
       

        <a class="carousel-control-prev" href="#menu-c-mobile" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#menu-c-mobile" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    </section>
    
    <section class="container ">
        <div class="row py-3 px-3 text-center">
            <div class="col-6 px-4">
                <img src="./assets/img/ab1.png" class="of-cover w-100">
                <h2 class="f-brandonSM-200 text-uppercase" style="font-size: .7rem">BEST QUALITY</h2>
            </div>
            <div class="col-6 px-4">
                <img src="./assets/img/ab2.png" class="of-cover w-100">
                <h2 class="f-brandonSM-200 text-uppercase" style="font-size: .7rem">ON TIME</h2>
            </div>
            <div class="col-6 px-4">
                <img src="./assets/img/ab3.png" class="of-cover w-100">
                <h2 class="f-brandonSM-200 text-uppercase" style="font-size: .7rem">MASTER CHEF</h2>
            </div>
            <div class="col-6 px-4">
                <img src="./assets/img/ab4.png" class="of-cover w-100">
                <h2 class="f-brandonSM-200 text-uppercase" style="font-size: .7rem">TASTE FOOD</h2>
            </div>
        </div>
    </section>
        
    <section>
        <div class="py-5 text-center text-white align-items-center" style="background-image: url(assets/img/bg-black.png); height: 100%; weight: auto; background-repeat: no-repeat;">
            <h3 class="text-center text-gold mb-5 fs-40">BUFFET MENU</h3>
            
            <div id="menu-d-home" class="carousel slide" data-ride="carousel">          
            
                <div class="carousel-inner">
                    @foreach($buffet_homepage as $index => $bf)  
                    <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                        <a href="{{ route('menu', $mh->slug) }}">
                        <img src="{{ env('URL_MEDIA').'/'.$bf->images }}" class="of-cover" style="width: 70%">
                        {{-- <img src="{{ env('URL_MEDIA').'/'.$bf->images }}" class="of-cover" style="width: 40%"> --}}
                        </a>
                    </div>

                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#menu-d-home" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#menu-d-home" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                
            </div>
        
        </div>
    </section>
   <!-- Menu -->

    <!-- Chef -->
    <section>
        <div class="pt-3" style="background-color: #f3f1f1;background-size: cover;height: 100%; width: auto;  background-repeat: no-repeat;">
            <div class="card-body">
                <h6 class="text-gold">Looking for a gourmet experience?</h6>
                <p class="f-brandonSM-200 text-grey w-75">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <h6 class="" style="transform: rotate(-6deg);">mr. Sindu Wicked</h6>
            </div>
        </div>
        <div class="text-right" style="background-color: #f3f1f1;background-size: cover; height: auto;  background-repeat: no-repeat;margin-top: -167px;">
            <img src="assets/img/chef-new.png" class="card-img-top" alt="..." style="width: 145px">
        </div>
    </section>
    <!-- /Chef -->

    <!-- Testimonial -->
    <section style="height: 550px">
        <div class="py-5 text-center text-white align-items-center" style="background-image: url(assets/img/bg-black.png); height: 100%; weight: auto; background-repeat: no-repeat;">
            <h3 class="f-bigNoodle-400 fs-50 pt-4" style="letter-spacing: 2px;">TESTIMONIAL</h3>
            <h6>What People Say</h6>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($testimonial_homepage as $index => $th)
                    <div class="container carousel-item <?= $index == 0 ? 'active' : '' ?>">
                        {!! str_replace('<p>','<p class="py-5 f-brandonSM-200 fs-18 text-white">',$th -> body) !!}
                        <h5 class="py-1  f-bigNoodle-200" style="letter-spacing: 2px;">{{ $th -> author }}</h5>
                        <h6 style="color: #ACB0b3 !important">{{ $th -> footer }}</h6>
                    </div>
                    @endforeach
                    <!-- {{-- <div class="carousel-item">
                        <p class="py-5 f-brandonSM-200" style="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <h5 class="py-1">Addeleide Kelley</h5>
                        <h6>Staff</h6>
                    </div> --}} -->
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial -->
</main>
<!-- /Main Content -->

@endsection