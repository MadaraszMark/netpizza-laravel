@include('layouts.partials.header')

<section class="home-slider owl-carousel img" style="background-image: url('{{ asset('images/bg_1.jpg') }}');">
  <div class="slider-item" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Bejelentkezés</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="{{ url('/') }}">Kezdőlap</a></span>
            <span>Bejelentkezés</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row block-9 justify-content-center mb-5">
      <div class="col-md-6 ftco-animate">

        {{-- HIBAÜZENET (rossz e-mail vagy jelszó esetén) --}}
        @if ($errors->any())
          <div class="alert alert-danger text-center">
            <strong>Hibás e-mail cím vagy jelszó!</strong>
          </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="contact-form">
          @csrf
          
          {{-- EMAIL --}}
          <div class="form-group">
            <input 
              type="email" 
              class="form-control" 
              placeholder="E-mail cím" 
              name="email" 
              value="{{ old('email') }}" 
              required 
              autofocus>
          </div>

          {{-- JELSZÓ --}}
          <div class="form-group">
            <input 
              type="password" 
              class="form-control" 
              placeholder="Jelszó" 
              name="password" 
              required>
          </div>

          {{-- GOMB --}}
          <div class="form-group text-center">
            <button type="submit" class="btn btn-primary py-3 px-5">Bejelentkezés</button>
          </div>
        </form>

        <p class="text-center mt-3">
          Még nincs fiókod? <a href="{{ route('register') }}">Regisztrálj itt</a>
        </p>

      </div>
    </div>
  </div>
</section>

@include('layouts.partials.footer')