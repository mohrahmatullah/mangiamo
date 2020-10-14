@extends('mobile.includes.default')
@section('title', 'Promo | Mangiamo')
@section('content')

<main class="">

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

   <div class="w-100" style="height:50px"></div>

    <div class="container">
        <section class="px-3">
            @foreach($promo as $pr)
            <a href="{{ 'promo-detail/'.$pr->slug }}" class="text-black">
                <div class="row text-center">
                    <div class="col-12">
                        <img src="{{ env('URL_MEDIA').'/'.$pr->images }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="f-brandonSM-200 fs-18 text-uppercase mb-0">{{$pr->title}}</h2>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </section>
    </div>
  
   <!-- {{-- <section class="container my-5">
    <a href="{{ route('promo-detail') }}">
       <div class="row px-5 text-center">
         <div class="card" style="width: 20rem;">
           <img src="assets/img/promo1.png" class="card-img-top" alt="...">
           <div class="card-body">
               <h2 class="f-brandonSM-200 fs-18 pt-4 text-uppercase">WHOLE ROASTED CHICKEN</h2>
           </div>
       </div>
   </div>
    </a>
   <hr class="dash">
   </section>  --}} -->

</main>

@endsection