@extends('mobile.includes.default')
@section('title', 'Career | Mangiamo')
@section('content')
<!-- Main Content -->
<main>

 <!-- Flower Header -->
 <section>
  <div class="d-flex justify-content-between mx-0" style="margin-bottom: -3rem">
      <div class="crop">
          <img src="assets/img/flower.png" style="width: 150px; margin-top: -50%; margin-left: -50%">
      </div>
      <div class="text-right mx-0">
          <img src="assets/img/flower-r.png" style="width: 100px;">
      </div>
  </div>
</section>
<!-- Flower Header -->



<div class="w-100" style="height: 50px;"></div>

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
    <div class="row h-100 align-items-center mb-4">
      <div class="col-12 mb-2">
        <div class="row align-items-center">
          <div class="col-7">
            <h3 class="f-brandonSM-200 wow fadeInLeft" data-wow-delay=".3s">{{ $c->job }}</h3>
          </div>
          <div class="col-5 text-right">
          <!-- Collapse -->
            <a href="#demo{{ $si }}" class="btn-readMore-blog f-brandonSB-200 px-3 text-uppercase"
             data-toggle="collapse">More</a>
          </div>
          <div id="demo{{ $si }}" class="col-12 collapse f-brandontext-black-400 fs-14">
            {!! str_replace('<p>','<p class="f-brandonSL-200 fs-18 text-justify">',$c->description) !!}
            <div class="text-right">
              <a href="" class="btn-readMore-blog f-brandonSB-200 px-3 text-uppercase" data-toggle="modal" data-target="#exampleModalCenter{{ $sa }}">Apply</a>
            </div>
            <!-- Collapse -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter{{ $sa }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <form class="modal-dialog modal-dialog-centered" role="document" action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Form Apply</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-12 mb-3">
                        <input type="text" class="form-control" id="careerName" name="name" placeholder="Name" required />
                      </div>
                      <div class="col-12 mb-3">
                        <input value="{{ $c->job }}" type="text" id="careerJobsDesc" name="jobdesc" class="form-control" placeholder="Job Desc" readonly required />
                      </div>
                      <div class="col-12 mb-3">
                        <input type="number" class="form-control" id="careerPhone" name="phone" placeholder="Phone" required />
                      </div>
                      <div class="col-12 mb-3">
                        <input type="email" class="form-control" id="careerEmail" name="email" placeholder="E-mail" required />
                      </div>
                      <div class="col-12 mb-3">
                        <div class="custom-file mb-3">
                          <input type="file" class="custom-file-input" id="inputGroupFile02" name="filename">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          <!-- Modal -->
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="w-100" style="height: 1px;background-color:rgba(0,0,0,.3)"></div>
      </div>
    </div>
    @php
      $si++;
      $sa++;
    @endphp
    @endforeach
  </div>
</section>
<!-- /Content -->

</main>
<input type="hidden" id="CarierUrl" value="{{ URL::to('/') }}">
<!-- /Main Content -->
@endsection