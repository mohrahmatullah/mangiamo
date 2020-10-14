@extends('mobile.includes.default')
@section('title', 'Detail Menu | Mangiamo')
@section('content')

<!-- Main Content -->
<main class="">

    <!-- Flower Header -->
    <div class="d-flex justify-content-between mx-0" style="margin-bottom: -3rem">
        <div class="crop">
            <img src="{{ url('assets/img/flower.png') }}" style="width: 150px; margin-top: -50%; margin-left: -50%">
        </div>
        <div class="text-right mx-0">
            <img src="{{ url('assets/img/flower-r.png') }}" style="width: 100px;">
        </div>
    </div>
    <!-- Flower Header -->
    
    <section class="container my-5">
        <a  href="{{ route('menu' , $menu_every_slug->name ) }}">
            <label class="btn-label mb-4">{{ $menu_every_slug->name }}</label>
        </a>
        <div class="col" style="padding: center;">
            <img src="{{ env('URL_MEDIA').'/'.$menu_every_slug->images }}" class="of-cover w-100">
        </div>	
    </section>
    
    <section class="container my-5">
        <div class="my-5">
            <h3 class="f-brandonSB-200 fs-25">{{ $menu_every_slug->title }}</h3>
            <h3 class="f-brandontext-black-200 fs-20 text-left">Details</h3>
            <div class="line"></div>
            <p class="f-brandontext-black-200 fs-12 text-left">{!! $menu_every_slug->description !!}</p>
        </div>
    </section>
  
    <section>
        <div style="height: 230px !important">			
            @foreach($mainslider as $index => $ms)
                @php $img = str_replace('\\', '/', $ms); @endphp
                <a data-fancybox="gallery" href="{{ env('URL_MEDIA').'/'.$img }}">
                    <img src="{{ env('URL_MEDIA').'/'.$img }}" class="of-cover w-100 h-100">
                </a>
            @endforeach
        </div>
    </section>
  
</main>
<!-- /Main Content -->

@endsection