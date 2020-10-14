<!-- Footer -->
@if(Request::is('/'))
<footer>
  <div class="footer-index">
    <div class="col-3 white position-absolute d-flex align-items-center" style="margin-top: -11%; left: 37%; height: 385px; z-index: 1">
      <form class="text-center px-3" id="formSaveMessage" method="POST">
        <h3 class="f-bigNoodle-400 fs-30 text-black" style="letter-spacing: 2px;">WRITE TO US</h3>
        {{ csrf_field() }}
        <input class="input-message" type="text" id="MsgName" name="name" placeholder="Your Name (Required)">
        <input class="input-message" type="text" id="MsgEmail" name="email" placeholder="Your Email (Required)">
        <input class="input-message" type="text" id="MsgPhone" name="phone" placeholder="Your Number Phone (Required)">
        <textarea class="textarea-message" type="text" id="MsgMessage" name="message" placeholder="Your Message"></textarea>
        <input type="hidden" id="MsgUrl" value="{{ URL::to('/') }}">
        <button type="submit" class="btn-send f-brandonSB-200 " id="MsgSubmit">Send Message</button>
      </form>
    </div>
    <div class="row text-white px-5 py-2">
      <div class="col-4">
        <a href="index.html">
          <img src="{{ url('assets/img/logo-white.png') }}" class="of-cover mb-3" style="width: 100px">
        </a>
        <p class="f-brandonSB-200 text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
        <div class="d-flex justify-content-between">
          <div class="d-inline-flex text-white fw-600">
            Follow Us:
          </div>
          <div class="d-inline-flex text-white">
            <ul class="list-unstyled">
              <li class="float-left mr-3">
                <a href=""><img src="{{ url('assets/img/fb.png') }}" class="w-auto h-auto"></a>
              </li>
              <li class="float-left mr-3">
                <a href=""><img src="{{ url('assets/img/tw.png') }}" class="w-auto h-auto"></a>
              </li>
              <li class="float-left mr-3">
                <a href=""><img src="{{ url('assets/img/ig.png') }}" class="w-auto h-auto"></a>
              </li>

            </ul>
          </div>
        </div>
      </div>

      <div class="col-4">
      </div>

      <div class="col-4">
        <h5 class="py-1 f-bigNoodle-400">LOCATION:</h5>
        <p class="f-brandonSB-200 text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
        <h5 class="py-1 f-bigNoodle-400">EMAIL: </h5>
        <p class="f-brandonSB-200 text-white">mangiamobuffet@admin.com</p>
        <h5 class="py-1 f-bigNoodle-400">PHONE NUMBER: </h5>
        <p class="f-brandonSB-200 text-white">(021)546 4361</p>
      </div>

    </div>
  </div>
  <div class="footer-bottom py-3">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center py-3">
          <h6 class="f-brandonSM-200 text-white mb-0">&copy; 2019 Mangiamo Buffet. All Rights Reserved. Terms of use and Privacy Policy</h6>
        </div>
      </div>
    </div>
  </div>
</footer>
@else
<footer>
  <div class="footer-top py-3 py-xl-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-xl-4 pr-xl-4">
          <img src="{{ url('assets/img/logo-white.png') }}" class="logo-header mb-3" style="width: 80px; height: auto;">
          <h6 class="f-brandonSM-200 mb-4 text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget justo elit. Maecenas eleifend eu est quis sagittis. Etiam dictum dolor sem, vitae sodales lacus pretium in.</h6>
          <div class="d-flex justify-content-between">
            <div class="d-inline-flex text-white fw-600">
              Follow Us:
            </div>
            <div class="d-inline-flex text-white">
              <ul class="list-unstyled">
                <li class="float-left mr-3">
                  <a href=""><img src="{{ url('assets/img/fb.png') }}" class="w-auto h-auto"></a>
                </li>
                <li class="float-left mr-3">
                  <a href=""><img src="{{ url('assets/img/tw.png') }}" class="w-auto h-auto"></a>
                </li>
                <li class="float-left mr-3">
                  <a href=""><img src="{{ url('assets/img/ig.png') }}" class="w-auto h-auto"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4">
          <h4 class="text-uppercase f-bigNoodle-200 text-white">Location :</h4>
          <h6 class="f-brandonSM-200 mb-4 text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget justo elit. Maecenas eleifend eu est quis sagittis. Etiam dictum dolor sem, vitae sodales lacus pretium in.</h6>
        </div>
        <div class="col-12 col-xl-4">
          <h4 class="text-uppercase f-bigNoodle-200 text-white">Email :</h4>
          <h6 class="f-brandonSM-200 mb-4 text-white">Mangiamobuffet@admin.com</h6>
          <h4 class="text-uppercase f-bigNoodle-200 text-white">Phone Number :</h4>
          <h6 class="f-brandonSM-200 mb-4 text-white">(021) 546 4361</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom py-3">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center py-3">
          <h6 class="f-brandonSM-200 text-white mb-0">&copy; 2019 Mangiamo Buffet. All Rights Reserved. Terms of use and Privacy Policy</h6>
        </div>
      </div>
    </div>
  </div>
</footer>
@endif
<!-- /Footer -->