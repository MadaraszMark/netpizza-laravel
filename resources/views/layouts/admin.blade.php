@include('layouts.partials.header')

<section class="home-slider owl-carousel img" style="background-image: url('{{ asset('images/bg_1.jpg') }}');">
  <div class="slider-item" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Admin Felület</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="{{ url('/') }}">Kezdőlap</a></span> 
            <span>Admin</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Üdvözöljük, {{ Auth::user()->name }}!</h2>
        <p>Ez az adminisztrációs felület. Itt kezelheti a pizzákat, rendeléseket és felhasználókat.</p>
      </div>
    </div>
  </div>
</section>

@include('layouts.partials.footer')
