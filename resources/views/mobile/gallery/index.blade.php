@extends('mobile.includes.default')
@section('title','Gallery | Mangiamo')
@section('content')

<main style="top: 0px !important">

    <!-- Flower Header -->
    <!-- <div
        class="d-flex justify-content-between mx-0"
        style="margin-bottom: -3rem"
    >
        <div class="crop">
            <img
                src="assets/img/flower.png"
                style="width: 150px; margin-top: -50%; margin-left: -50%"
            />
        </div>
        <div class="text-right mx-0">
            <img src="assets/img/flower-r.png" style="width: 100px;" />
        </div>
    </div> -->
    <!-- Flower Header -->

    <!-- <section Photo Grid -->
    <div class="row1 py-0 mb-3">
        <div class="column1 px-1">
            <div class="gallery-l">
                @foreach($gallery as $gl)
                  <a data-fancybox="gallery" href="{{ env('URL_MEDIA').'/'.$gl->image }}"><img src="{{ env('URL_MEDIA').'/'.$gl->image }}" class="w-100 h-100 mb-3"></a>
                @endforeach      
            </div>
        </div>
    </div>
        
</main>

@endsection