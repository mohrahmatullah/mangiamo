@extends('dekstop.includes.default')
@section('title', 'Career | Mangiamo')
@section('content')
<!-- Main Content -->
<main>

<!-- Flower Header -->
<div class="d-flex justify-content-between mx-0" style="margin-bottom: -3rem">
  <div class="">
    <img src="assets/img/flower.png" style="width: 250px; margin-top: -50%; margin-left: -50%">
  </div>
  <div class="text-right mx-0">
    <img src="assets/img/flower-r.png" style="width: 200px;">
  </div>
</div>
<!-- Flower Header -->

<!-- Breadcrumb -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb transparent">
            <li class="breadcrumb-item f-brandonSL-200"><a href="#">Home</a></li>
            <li class="breadcrumb-item f-brandonSL-200 active" aria-current="page">Careers</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- /Breadcrumb -->

<!-- Content -->
<section class="mb-3">
  <div class="container h-100">
    <div class="row">
      <div class="col-12">
        <h1 class="f-brandonSM-200 mb-4 wow fadeInLeft">Available</h1>
      </div>
    </div>

    @php
      $si = 1;
      $sa = 1;
    @endphp
    @foreach($career as $c)
    <div class="row h-100 align-items-center mb-4" id="jobAvailable">
      <div class="col-12 mb-2">
        <div class="row align-items-center">
          <div class="col-7">
            <h3 class="f-brandonSM-200 wow fadeInLeft" data-wow-delay=".3s">{{ $c->job }}</h3>
          </div>

          <div class="col-5 text-right">
            <!-- Collapse -->
              <a href="#description{{ $si }}" class="btn-readMore-blog f-brandonSB-200 px-3 text-uppercase"
               data-toggle="collapse">More</a>
          </div>

          <div id="description{{ $si }}" class="col-12 collapse f-brandontext-black-400 fs-14">
            {!! str_replace('<p>','<p class="f-brandonSL-200 fs-18 text-justify">',$c->description) !!}
              <div class="text-right">
                <a href="" class="btn-readMore-blog f-brandonSB-200 px-3 text-uppercase" data-toggle="modal" data-target="#exampleModalCenter{{ $sa }}">Apply</a>
              </div>
              <!-- Collapse -->

              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter{{ $sa }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Form Apply</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <form class="text-center px-3" id="formSaveCareerMsg" action="" enctype="multipart/form-data" method="POST">
                      {{ csrf_field() }}
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-12 mb-3">
                            <input type="text" class="form-control" id="CareerMsgName" name="name" placeholder="Name" require>
                          </div>
                          <div class="col-12 mb-3">
                            <input type="text" value="{{ $c->job }}" class="form-control" id="CareerMsgJobD" name="jobdesc" placeholder="Job Title" readonly require>
                          </div>
                          <div class="col-12 mb-3">
                            <input type="number" class="form-control" id="CareerMsgPhone" name="phone" placeholder="Phone"/>
                          </div>
                          <div class="col-12 mb-3">
                            <input type="email" class="form-control" id="CareerMsgEmail" name="email" placeholder="E-mail"/>
                          </div>
                          <div class="col-12 mb-3">
                            <div class="custom-file">
                              <input type="file" name="file" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>                          
                          </div>
                        </div>
                        
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="MsgSubmit">Submit</button>

                        <!-- btn btn-primary // btn-send f-brandonSB-200 // btn btn-submit text-center-->
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Modal -->
          </div>

        </div>
      </div>

      <div class="col-12">
        <div class="w-100" style="height: 1px;background-color:rgba(0,0,0,.3)"></div>
      </div>

      @php
        $si++;
        $sa++;
      @endphp
    </div>
    @endforeach

  </div>
</section>
<!-- /Content -->

</main>
<!-- /Main Content -->
@endsection