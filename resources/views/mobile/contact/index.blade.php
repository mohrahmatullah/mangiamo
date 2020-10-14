@extends('mobile.includes.default')
@section('title','Contact | Mangiamo')
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

  <div class=" " style="background-image:url('assets/img/daun-blur.png');
    background-repeat: no-repeat;
    background-attachment: relative; 
    background-position: 300px 30%;
    background-size: 200px 200px;">

    <div class=" " style="background-image:url('assets/img/daun-blur.png');
      background-repeat: no-repeat;
      background-attachment: relative; 
      background-position: -60px 10%;
      background-size: 100px 100px;">

      <section class="container py-3">
        <div class="text-left pt-4">
          <h2 class="f-brandon-text-black-400">Contact us</h2>
          <p class="f-brandontext-black-400 fs-14">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam.
          </p>
          <p class="f-brandon-text-black-400 fs-14">Telp:021 546 64353</p>
          <p class="f-brandon-text-black-200 fs-14" style="color:gold">
            mangiamobuffet@admin.com
          </p>
          <p class="f-brandon-text-black-200 fs-14">Want to join the team?</p>
          <p class="f-brandon-text-black-200 fs-14" style="color:gold">
            Apply today
          </p>
          <h2 class="f-brandon-text-black-200">Working hours</h2>
          <p class="f-brandon-text-black-200 fs-14">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam.
          </p>
          <p class="f-brandon-text-black-200 fs-14">Reservation</p>
          <p class="f-brandon-text-black-200 fs-14">5436 84757</p>
          <a href="https://wa.me/628543684757" class="btn btn-reservation">
            MAKE ONLINE RESERVATION
          </a>
        </div>
      </section>
    </div>
  </div>

<!-- contact-us -->

<!-- maps -->
<section>
  <div class="" style="">
    <iframe
      width="100%"
      id="gmap_canvas"
      src="https://maps.google.com/maps?q=Cluster%20Paramount%20Hill%20Golf%20Jalan%20Gading%20Golf%20Timur%20Blok%20GGT%20No%20112&t=&z=13&ie=UTF8&iwloc=&output=embed"
      frameborder="0"
      scrolling="no"
      marginheight="0"
      marginwidth="0"
      class=""
      style="height: 300px"
    ></iframe>
  </div>
</section>
<!-- maps -->

<!-- GetInTouch -->
  <!-- <section class="cornsilk1 container my-5" "> -->
  <section class="silver" style="background-image:url('assets/img/saos.png');
    background-repeat: no-repeat;
    background-attachment: relative; 
    background-position: 330px top;
    background-size: 100px 100px;">

    <section class="container">
      <div class="text-left py-4">
        <h2 class="f-brandon-text-black-400">Get in touch</h2>
        <p class="f-brandontext-black-200 fs-14">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam.
        </p>
        <form id="formSaveMessage" method="POST">
        {{ csrf_field() }}
          <div class="row">
            <div class="col-12 mb-3">
            <input class="form-control" 
            type="text" 
            id="MsgName" 
            name="name" 
            placeholder="Name" 
            />
            </div>
            <div class="col-12 mb-3">
              <input
                class="form-control" 
                type="text" 
                id="MsgPhone" 
                name="phone" 
                placeholder="Phone"
              />
            </div>
            <div class="col-12 mb-3">
              <input
                class="form-control"
                type="text"
                id="MsgEmail"
                name="email"
                placeholder="E-mail"
              />
            </div>
          </div>
          <div class="mb-3">
            <textarea 
            class="form-control" 
            rows="6" 
            cols="60" 
            id="MsgMessage" 
            type="text" 
            name="message" 
            placeholder="Your mesage"></textarea>
          </div>
          <input type="hidden" id="MsgUrl" value="{{ URL::to('/') }}">
          <div class="text-center">
            <button type="submit" class="btn btn-submit text-center" id="MsgSubmit">
              SUBMIT
            </button>
          </div>
        </form>
      </div>
    </section>
  </section>
  <!-- GetInTouch -->
</main>

@endsection
