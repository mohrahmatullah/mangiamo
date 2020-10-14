@extends('mobile.includes.default')
@section('title','Detail-Promo | Mangiamo')
@section('content')


 <main class="" style="top: 0px !important">
    <!-- Flower Header -->
    <div
        class="d-flex justify-content-between mx-0"
        style="margin-bottom: -3rem"
    >
        <div class="">
            <img
                src="{{ url('./assets/img/flower.png') }}"
                style="width: 150px; margin-top: -50%; margin-left: -50%"
            />
        </div>
        <div class="text-right mx-0">
            <img src="{{ url('./assets/img/flower-r.png')}}" style="width: 100px;" />
        </div>
    </div>
    <!-- Flower Header -->

    <div class="w-100" style="height: 50px;"></div>

    <div class="container">
        <div class="row px-3 mb-3">
            <div class="col-12">
                <img src="{{ env('URL_MEDIA').'/'.$promo_detail->images }}" class="of-cover w-100 ">
            </div>
        </div>
    </div>

    <section class="container my-2">
        <div class="text-center">
            <h3 class="f-brandonSB-200 fs-30 text-left">{{$promo_detail->caption}}</h3>
            <h3 class="f-brandontext-black-400 fs-19 text-left">
                Details
            </h3>
            <div class="line"></div>
            <p class="f-brandontext-black-200 fs-17 text-left">
                {!! str_replace('<p>','<p class="f-brandonSL-200 fs-18 text-left">',$promo_detail -> description) !!}
            </p>
            <hr class="dash" />
        </div>
    </section>
    
</main>

@endsection