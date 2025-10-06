<footer class="ftco-footer ftco-section img">
  <div class="overlay"></div>
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Rólunk</h2>
          <p>Távol a város zajától, az ízek birodalmában születnek a legfinomabb pizzák és ételek.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Legutóbbi bejegyzések</h2>

          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url('{{ asset('images/image_1.jpg') }}');"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Új pizzáink minden héten!</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> 2025. október 6.</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>

          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url('{{ asset('images/image_2.jpg') }}');"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Friss alapanyagok, tökéletes ízek</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> 2025. szeptember 15.</a></div>
                <div><a href="#"><span class="icon-person"></span> Márk</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Szolgáltatásaink</h2>
          <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">Frissen sütött ételek</a></li>
            <li><a href="#" class="py-2 d-block">Házhoz szállítás</a></li>
            <li><a href="#" class="py-2 d-block">Minőségi alapanyagok</a></li>
            <li><a href="#" class="py-2 d-block">Egyedi ízek</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Elérhetőségek</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">203 Pizza utca, Budapest, Magyarország</span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">+36 30 555 1234</span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@netpizza.hu</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <p>
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> Minden jog fenntartva | Készítette: Madarász Márk
        </p>
      </div>
    </div>
  </div>
</footer>

<div id="ftco-loader" class="show fullscreen">
  <svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
  </svg>
</div>

{{-- Laravel asset() – JS --}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('js/google-map.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
