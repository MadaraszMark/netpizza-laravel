@include('layouts.partials.header')
<link rel="stylesheet" href="{{ asset('css/order.css') }}">

<section class="home-slider owl-carousel img" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
  <div class="slider-item" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Pizza rendelés</h1>
          <p class="breadcrumbs"><span><a href="{{ url('/') }}">Kezdőlap</a></span> <span>Rendelés</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section" style="background-color:#111;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 ftco-animate">

        <div class="pizza-form-container">
          <h2 class="text-center mb-4">Rendelés leadása</h2>

          {{-- Sikeres rendelés üzenet --}}
          @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
          @endif

          {{-- Hibák --}}
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="m-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('order.store') }}" method="POST">
            @csrf

            {{-- Ha a felhasználó nincs bejelentkezve, kérünk e-mail címet --}}
            @guest
              <div class="form-group mb-4">
                <label for="email" class="font-weight-bold text-white">E-mail cím</label>
                <input type="email" name="email" class="form-control pizza-input" placeholder="pl. vendeg@email.com" required>
                @error('email')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            @endguest

            <div class="form-group mb-3">
              <label for="pizzanev" class="font-weight-bold text-white">Válassz pizzát</label>
              <select name="pizzanev" class="form-control pizza-select" required>
                <option value="">-- Válassz egy pizzát --</option>
                @foreach($pizzas as $pizza)
                  <option value="{{ $pizza->nev }}">{{ $pizza->nev }}</option>
                @endforeach
              </select>
              @error('pizzanev')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group mb-4">
              <label for="darab" class="font-weight-bold text-white">Darabszám</label>
              <input type="number" name="darab" class="form-control pizza-input" min="1" max="10" value="1" required>
              @error('darab')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary px-5 py-2">Rendelés leadása</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>

@include('layouts.partials.footer')

