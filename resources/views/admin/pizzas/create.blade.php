@include('layouts.partials.header')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<section class="home-slider owl-carousel img" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
  <div class="slider-item" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Új pizza hozzáadása</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="{{ route('admin') }}">Admin</a></span>
            <span>Pizzák</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 bg-white p-5 rounded shadow-lg">
        <h3 class="text-center mb-4">🍕 Új pizza létrehozása</h3>

        @if ($errors->any())
          <div class="alert alert-danger">
            <strong>Hiba történt!</strong> Kérlek, javítsd az alábbi hibákat:
            <ul class="mt-2 mb-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('pizzas.store') }}" method="POST" class="contact-form">
          @csrf
          
          <div class="form-group mb-3">
            <label for="nev" class="font-weight-bold">Pizza neve</label>
            <input type="text" name="nev" class="form-control" placeholder="Pl. NetPizza Extra" value="{{ old('nev') }}" required>
          </div>

          <div class="form-group mb-3">
            <label for="kategorianev" class="font-weight-bold">Kategória</label>
            <select name="kategorianev" class="form-control" required>
              <option value="">-- Válassz kategóriát --</option>
              <option value="Klasszikus">Klasszikus</option>
              <option value="Prémium">Prémium</option>
              <option value="Extra">Extra</option>
            </select>
          </div>

          <div class="form-group mb-3">
            <label class="font-weight-bold d-block">Vegetáriánus</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="vegetarianus" id="veg1" value="1">
              <label class="form-check-label" for="veg1">Igen</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="vegetarianus" id="veg0" value="0" checked>
              <label class="form-check-label" for="veg0">Nem</label>
            </div>
          </div>

          <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary px-5 py-2">💾 Mentés</button>
            <a href="{{ route('pizzas.index') }}" class="btn btn-secondary px-4 py-2 ml-2">↩️ Vissza</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@include('layouts.partials.footer')
