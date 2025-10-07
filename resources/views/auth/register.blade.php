@include('layouts.partials.header')

<section class="home-slider owl-carousel img" style="background-image: url('{{ asset('images/bg_1.jpg') }}');">
  <div class="slider-item" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Regisztráció</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="{{ url('/') }}">Kezdőlap</a></span> 
            <span>Regisztráció</span>
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
        <form method="POST" action="{{ route('register') }}" class="contact-form">
          @csrf

          {{-- Név --}}
          <div class="form-group">
            <input 
              type="text" 
              class="form-control" 
              name="name" 
              placeholder="Teljes név" 
              value="{{ old('name') }}" 
              required>
            @error('name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          {{-- Email --}}
          <div class="form-group">
            <input 
              type="email" 
              class="form-control" 
              name="email" 
              placeholder="E-mail cím" 
              value="{{ old('email') }}" 
              required>
            @error('email')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          {{-- Jelszó --}}
          <div class="form-group">
            <input 
              type="password" 
              class="form-control" 
              name="password" 
              placeholder="Jelszó" 
              required>
            @error('password')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          {{-- Jelszó megerősítése --}}
          <div class="form-group">
            <input 
              type="password" 
              class="form-control" 
              name="password_confirmation" 
              placeholder="Jelszó megerősítése" 
              required>
          </div>

          {{-- Gomb --}}
          <div class="form-group text-center">
            <button type="submit" class="btn btn-primary py-3 px-5">Regisztráció</button>
          </div>
        </form>

        <p class="text-center mt-3">
          Már van fiókod? <a href="{{ route('login') }}">Jelentkezz be itt</a>
        </p>
      </div>
    </div>
  </div>
</section>

@include('layouts.partials.footer')


