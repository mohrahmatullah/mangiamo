<div id="list-terkini">
  <div class="row px-5 text-center">
    @foreach($promo as $pr)
    <div class="col-6 mb-3">
      <a href="{{ 'promo-detail/'.$pr->slug }}">
        <img src="{{ env('URL_MEDIA').'/'.$pr->images }}" class="of-cover w-100">
        <h2 class="f-brandonSM-200 fs-18 pt-4 text-uppercase text-black">{{$pr->title}} </h2>
      </a>
    </div>
    @endforeach   
  </div>
  <div id="list-terkini-ajax">
    <div class="row my-3">
        <div class="col-12 text-center" id="load-more">
          @php $paginator = $promo; @endphp
          {{ $paginator->appends([])->render('dekstop.layouts.paggingmore') }}
        </div>
    </div>
  </div>
</div>