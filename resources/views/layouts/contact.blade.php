@include('layouts.partials.header')

<section class="home-slider owl-carousel img" style="background-image: url('{{ asset('images/bg_1.jpg') }}');">
  <div class="slider-item" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Kapcsolat</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Kezdőlap</a></span> <span>Kapcsolat</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section">
  <div class="container mt-5">

    {{-- Siker / hiba üzenetek --}}
    @if(session('success'))
      <div class="alert alert-success text-center">
        {{ session('success') }}
      </div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="row block-9">
      <div class="col-md-4 contact-info ftco-animate">
        <div class="row">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Elérhetőségek</h2>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Cím:</span> 6000 Kecskemét, Fő utca 21, Magyarország</p>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Telefon:</span> <a href="tel://3676123456">+36 76 123 456</a></p>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Email:</span> <a href="mailto:info@netpizza.hu">info@netpizza.hu</a></p>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Weboldal:</span> <a href="#">netpizza.hu</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-1"></div>

      {{-- Kapcsolat űrlap --}}
      <div class="col-md-6 ftco-animate">
        <form method="POST" action="{{ route('contact.store') }}" class="contact-form">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Teljes neved" value="{{ old('name') }}" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email címed" value="{{ old('email') }}" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Tárgy" value="{{ old('subject') }}" required>
          </div>
          <div class="form-group">
            <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Üzenet" required>{{ old('message') }}</textarea>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-primary py-3 px-5">Üzenet küldése</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<div id="map"></div>

@include('layouts.partials.footer')
