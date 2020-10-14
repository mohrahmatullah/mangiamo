@extends('mobile.includes.default')
@section('title','Detail-Blog | Mangiamo')
@section('content')

<main class="">

    <div class="row">
        <div class="col-12" style="padding: 0px 0px">
            <img src="{{ env('URL_MEDIA').'/'.$blog_detail->image }}" class="of-cover w-100" />
        </div>
    </div>

    <section class="container my-5">
        <div class="my-5">
            <h3 class="f-brandonSB-200">{{$blog_detail->title}}</h3>
            <p class="f-brandontext-black-200 text-left">
                {!! str_replace('<p>','<p class="f-brandonSL-200 fs-18 text-justify">',$blog_detail->description) !!}
            </p>
        </div>
    </section>

    <div class="row">
        <div class="col-12">
            <div class="slider-blog owl-carousel owl-theme">
                @foreach($slider_menu as $sm)
                <div class="item">
                    <a data-fancybox="gallery" href="{{ env('URL_MEDIA').'/'.$sm }}" class="mb-3"><img src="{{ env('URL_MEDIA').'/'.$sm }}" class="of-cover w-100" style="height: 250px"></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection
