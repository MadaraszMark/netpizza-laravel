@include('layouts.partials.header')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<section class="home-slider owl-carousel img" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
  <div class="slider-item" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Pizza kezelőfelület</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="{{ url('/') }}">Kezdőlap</a></span>
            <span>Pizzák</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-10 text-center ftco-animate">
        <h2 class="mb-4">Pizza lista</h2>
        <a href="{{ route('pizzas.create') }}" class="btn btn-primary mb-3 px-4 py-2">+ Új pizza hozzáadása</a>

        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive shadow-lg rounded">
          <table class="table table-striped table-bordered text-center bg-white">
            <thead class="thead-dark">
              <tr>
                <th>Név</th>
                <th>Kategória</th>
                <th>Vegetáriánus</th>
                <th>Műveletek</th>
              </tr>
            </thead>
            <tbody>
              @forelse($pizzas as $pizza)
                <tr>
                  <td>{{ $pizza->nev }}</td>
                  <td>{{ $pizza->kategorianev }}</td>
                  <td>
                    @if($pizza->vegetarianus)
                      <span class="badge bg-success text-white">Igen</span>
                    @else
                      <span class="badge bg-danger text-white">Nem</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('pizzas.edit', $pizza->nev) }}" class="btn btn-sm btn-warning">✏️ Szerkesztés</a>
                    <form action="{{ route('pizzas.destroy', $pizza->nev) }}" method="POST" style="display:inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Biztosan törlöd ezt a pizzát?')">
                        🗑️ Törlés
                      </button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="4" class="text-muted">Nincs elérhető pizza az adatbázisban.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

@include('layouts.partials.footer')

