<div id="menuDiv" class="row">
  @if(count($menus) > 0)
    @foreach( $menus as $mes)
      <div class="col-3 py-3">
        <a href="{{ route('menu-detail' , $mes->slug) }}" class="text-black">
          <img src="{{ env('URL_MEDIA').'/'.$mes->images }}" class="of-cover w-100">
          <h3 class="f-brandonSM-200 fs-20 pt-3">{{ $mes->title }}</h3>
        </a>
      </div>
    @endforeach
  @else
    <div class="col-12">
      <h4 class="text-grey">Data menu belum tersedia.</h4>
    </div>
  @endif
</div>