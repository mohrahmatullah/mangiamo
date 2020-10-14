@extends('mobile.includes.default')
@section('title','Blog | Mangiamo')
@section('content')

<main class="" style="top: 0px !important">

  <!-- Flower Header -->
  <div class="d-flex justify-content-between mx-0" style="margin-bottom: -3rem">
    <div class="crop">
        <img src="assets/img/flower.png" style="width: 150px; margin-top: -50%; margin-left: -50%">
    </div>
    <div class="text-right mx-0">
        <img src="assets/img/flower-r.png" style="width: 100px;">
    </div>
  </div>
  <!-- Flower Header -->

  <div class="container pt-5">
    @foreach($blog as $bl)
    <div class="row mb-3">
      <div class="col-12">
        <img src="{{ env('URL_MEDIA').'/'.$bl->image }}" class="of-cover w-100 img-rounded-5 mb-2">
        <label class="btn-label mb-2 fs-10">BLOG</label>
        <section class="">
          <div class="text-left mb-4">
            <h3 class="f-brandonSB-200 fs-16">{{$bl->title}}</h3>
            <p class="f-brandontext-black-200 fs-14 text-left">
              {!! str_replace('<p>','<p class="f-brandonSL-200 fs-18">',$bl -> excerpt) !!}
            </p>
          </div>
          <div class="text-right">
            <a href="{{ 'blog-detail/'.$bl->slug }}" class="btn-readMore-blog f-brandonSB-200 fs-16 px-3">READ MORE</a>
          </div>
          <hr class="dash">
        </section>
      </div>
    </div>
    @endforeach
  </div>
      
</main>
@endsection
    