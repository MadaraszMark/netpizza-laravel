@include('layouts.partials.header')

<section class="home-slider owl-carousel img" style="background-image: url('{{ asset('images/bg_1.jpg') }}');">
  <div class="slider-item" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Étlapunk</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Kezdőlap</a></span> <span>Étlap</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">

    {{-- Keresés és szűrő --}}
    <form method="get" class="mb-5">
      <div class="row align-items-end">
        <div class="col-md-6 mb-2">
          <label class="text-muted small d-block">Keresés név szerint</label>
          <input type="text" name="q" value="{{ $search }}" class="form-control" placeholder="pl. Margherita">
        </div>
        <div class="col-md-3 mb-2">
          <div class="form-check mt-4">
            <input class="form-check-input" type="checkbox" name="veg" id="veg" value="1" {{ $onlyVeg ? 'checked' : '' }}>
            <label class="form-check-label" for="veg">Csak vegetáriánus pizzák</label>
          </div>
        </div>
        <div class="col-md-3 mb-2 text-right">
          <button class="btn btn-primary px-4">Szűrés</button>
          <a href="{{ route('menu') }}" class="btn btn-outline-secondary px-4">Törlés</a>
        </div>
      </div>
    </form>


    {{-- Kategóriák és pizzák listázása --}}
    @forelse($categories as $category)
      <div class="row mb-4">
        <div class="col-12">
          <h3 class="mb-3">
            {{ $category->nev }}
            <small class="text-muted">• Ár: {{ number_format($category->ar, 0, ',', ' ') }} Ft</small>
          </h3>
        </div>

        @forelse($category->pizzas as $pizza)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch w-100">
              <a class="block-20" style="background-image: url('{{ asset('images/pizza-1.jpg') }}');"></a>

              <div class="text py-4 d-block">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h4 class="mb-0">{{ $pizza->nev }}</h4>
                  @if($pizza->vegetarianus)
                    <span class="badge badge-success">Vega</span>
                  @endif
                </div>

                <p class="mb-2 text-muted">
                  Kategória: <strong>{{ $category->nev }}</strong><br>
                  Ára: <strong>{{ number_format($category->ar, 0, ',', ' ') }} Ft</strong>
                </p>

                <p class="mb-0 small text-muted">
                  Rendelések: {{ $pizza->orders_count ?? 0 }} db
                </p>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12">
            <p class="text-muted">Ehhez a kategóriához nincs (szűrőnek megfelelő) pizza.</p>
          </div>
        @endforelse
      </div>

      <hr>
    @empty
      <p class="text-center text-muted">Nincs megjeleníthető kategória.</p>
    @endforelse

  </div>
</section>

@include('layouts.partials.footer')
