@include('layouts.partials.header')

<section class="home-slider owl-carousel img" style="background-image: url('{{ asset('images/bg_1.jpg') }}');">
  <div class="slider-item" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Üzenetek</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="{{ url('/') }}">Kezdőlap</a></span> 
            <span>Üzenetek</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 ftco-animate text-center">
        <h2 class="mb-4">Ez az oldal csak regisztrált felhasználók számára elérhető!</h2>
        <p>Itt fognak megjelenni az üzeneteid, értesítéseid vagy visszajelzéseid.</p>
      </div>
    </div>
  </div>
</section>

@include('layouts.partials.footer')
