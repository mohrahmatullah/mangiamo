<div id="list-terkini">
  <div class="col-12">
    @foreach($blog as $bl)
    <div class="row my-5">
      <div class="col-12 col-xl-6 mb-3 mb-xl-5 text-center">
        <img src="{{ env('URL_MEDIA').'/'.$bl->image }}" class="of-cover w-100">
      </div>
      <div class="col-12 col-xl-6 mb-3 mb-xl-5">
        <label class="btn-label">blog</label>
        <h2 class="f-brandonSBlack-400 fs-30 text-uppercase">{{$bl->title}}</h2>
        <p>
          {!! str_replace('<p>','<p class="f-brandonSL-200 fs-18">',$bl -> excerpt) !!}
        </p>
        <div class="text-right"><a href="{{ 'blog-detail/'.$bl->slug }}" class="btn-readMore-blog f-brandonSB-200 px-3">READ MORE</a></div>
      </div>
      <div class="col-12">
        <div class="w-100" style="height: 1px;background-color:rgba(0,0,0,.3)"></div>
      </div>
    </div>
    @endforeach
  </div>
  <!-- PAGINATION MORE -->
  <div id="list-terkini-ajax">
        <div class="row justify-content-center">
          <div class="col-10 text-center" id="load-more">
            @php $paginator = $blog; @endphp
            {{ $paginator->appends([])->render('dekstop.layouts.paggingmore') }}
          </div>
        </div>
    </div>
</div>