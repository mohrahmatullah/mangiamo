@extends('mobile.includes.default')
@section('title', 'About | Mangiamo')
@section('content')

<!-- Main Content -->
<main class="" style="top: 0px !important">

    <!-- Flower Header -->
    <section>
        <div class="d-flex justify-content-between mx-0" style="margin-bottom: -3rem">
            <div class="crop">
                <img src="assets/img/flower.png" style="width: 150px; margin-top: -50%; margin-left: -50%">
            </div>
            <div class="text-right mx-0">
                <img src="assets/img/flower-r.png" style="width: 100px;">
            </div>
        </div>
    </section>
    <!-- Flower Header -->

    <section class="pt-4">
        <div class="container h-100">
            <div class="h-100 align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <h1 class="f-brandonSM-200 mb-4">{{$about_first->title}}</h1>
                            <h3 class="f-brandonSM-200 mb-3">{{$about_first->excerpt}}</h3>
                            <h5 class="f-brandonSL-200 mb-4" style="line-height: 1.5">{{$about_first->body}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="col" style="padding:0px 0px;">
        <img src="{{ env('URL_MEDIA').'/'.$about_first->image }}" class="of-cover w-100">
    </div>
    
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

    <div class="mb-4">
        <img src="{{ env('URL_MEDIA').'/'.$about_second->image }}" class="of-cover w-100">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11">
                <h1 class="f-brandonSM-200 mb-4">{{$about_second->title}}</h1>
                <h3 class="f-brandonSM-200 mb-3">{{$about_second->excerpt}}</h3>
                <h5 class="f-brandonSL-200 mb-4" style="line-height: 1.5">{{$about_second->body}}</h5>
            </div>
        </div>
        <hr class="dash">
    </div>

    <section class="container">
        <div class="mb-4">
            <div class="col-12">
                <div class="row justify-content-left">
                    <div class="col-12 text-center">
                        <h1 class="f-brandonSM-200 mb-4">Our Standarts</h1>
                    </div>
                </div>
                <div class="">
                    <div class="col-12 col-xl-4 mb-4">
                        <img src="assets/img/1.png" class="mb-3" style="width:40px;height:35px;">
                        <h3 class="f-brandonSM-200 mb-2">Tasty meals</h3>
                        <h5 class="f-brandonSL-200 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget justo elit. Maecenas eleifend eu est quis sagittis. Etiam dictum dolor sem, vitae sodales lacus pretium in. Etiam vehicula est diam, sit amet finibus diam sodales eu.</h5>
                    </div>
                    <div class="col-12 col-xl-4 mb-4">
                        <img src="assets/img/2.png" class="mb-3" style="width:40px;height:35px;">
                        <h3 class="f-brandonSM-200 mb-2">Healthy meals</h3>
                        <h5 class="f-brandonSL-200 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget justo elit. Maecenas eleifend eu est quis sagittis. Etiam dictum dolor sem, vitae sodales lacus pretium in. Etiam vehicula est diam, sit amet finibus diam sodales eu.</h5>
                    </div>
                    <div class="col-12 col-xl-4 mb-4">
                        <img src="assets/img/3.png" class="mb-3" style="width:40px;height:35px;">
                        <h3 class="f-brandonSM-200 mb-2">Italian Traditional</h3>
                        <h5 class="f-brandonSL-200 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget justo elit. Maecenas eleifend eu est quis sagittis. Etiam dictum dolor sem, vitae sodales lacus pretium in. Etiam vehicula est diam, sit amet finibus diam sodales eu.</h5>
                    </div>
                </div>
            </div>
        </div>

    </section>
 
    <section class="">
        <div style="background-color: #f5f7f4;">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="card-body">
                        <h3 class="fw-400 mb-3">Meet our Team</h3>
                        <h5 class="fw-400 mb-3" style="line-height: 1.5;">All our staff members, including walters are Chinese Americans, and we're proud to carry on the traditional Chinese culture forward!</h5>
                        <h5 class="fw-200 mb-3" style="line-height: 1.5;">This statement has been true for the last 50 years and counting, That is a tradition, that unites all the generations of Chinese Americans who've ever worked here...</h5>
                        <!-- <a href="" class="py-2 px-4 text-black text-uppercase" style="border: 1px solid red;border-radius: 3px;">Our Team</a> -->
                    </div>
                </div>
                <div class="col-12">
                    <img src="assets/img/p-team-m.png" class="card-img" >
                </div>
            </div>
        </div>
        <div class="container">
            <hr class="dash mb-3 mt-0">
        </div>
    </section>

    <section class="py-3">
        <div class="">
            <div class="col-12 text-center">
                <h2 class="f-brandonSM-200 mb-4 text-uppercase">Gallery</h2>
            </div>
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="assets/img/promo1.png" class="card-img" >
              </div>
              <div class="col-md-8">
                <div class="card-body row align-items-center mx-0">
                    <div class="col-12 col-xl-5 px-xl-5 px-0">
                        <h5 class="f-brandonSM-200 mb-3">Thanks to the internet and photo-sharing apps like instagram, our customers share their snapshots daily!</h5>
                        <h5 class="f-brandonSM-200 mb-4">See yourself how great both our dishes and our interior look!</h5>
                        <div class="text-center">
                            <a href="{{ route('gallery') }}" class="py-2 px-4 text-black text-uppercase d-inline-block" style="border: 1px solid #E34C26;border-radius: 3px;">Gallery</a>
                        </div>
                    </div>
                    
                </div>
              </div>
            </div>
        </div>
       
    </section>
    <section class="py-5 abt-careers">
        <div class="container" >
            <div class="row py-xl-5">
                <div class="col-12 text-center">
                    <h3 class="f-brandonSM-200 mb-4">We're hiring new culinary talents all the time!</h3>
                    <h5 class="f-brandonSL-200 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget justo elit. Maecenas eleifend eu est quis sagittis. Etiam dictum dolor sem, vitae sodales lacus pretium in. Etiam vehicula est diam, sit amet finibus diam sodales eu.</h5>
                    <a href="{{route('career')}}" class="py-2 px-4 text-black text-uppercase d-inline-block" style="border: 1px solid #E34C26;border-radius: 3px;">Careers</a>
                </div>
            </div>
        </div>  
    </section>
</main>
@endsection