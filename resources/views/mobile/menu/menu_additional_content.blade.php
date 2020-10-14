<div class="row" id="menuDiv">
  @if(count($menus) > 0)
    @foreach($menus as $mes)
      <div class="col-6 text-center mb-3">
        <a href="{{ route('menu-detail' , $mes->slug) }}" class="text-black">
          <img src="{{ env('URL_MEDIA').'/'.$mes->images }}" class="of-cover w-100">
          <h3 class="f-brandonSM-200 fs-20 pt-3" style="">{{ $mes->title }}</h3>
        </a>
      </div>
    @endforeach
  @else
    <div class="col-12">
      <h4>Data menu belum tersedia.</h4>
    </div>
  @endif
</div>