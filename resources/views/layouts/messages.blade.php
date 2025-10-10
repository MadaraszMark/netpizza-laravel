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
    <h2 class="text-center mb-5">Beérkezett üzenetek</h2>

    @if($messages->isEmpty())
      <p class="text-center text-muted">Még nem érkezett üzenet.</p>
    @else
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="thead-dark text-center">
            <tr>
              <th>Név</th>
              <th>Email</th>
              <th>Tárgy</th>
              <th>Üzenet</th>
              <th>Küldés ideje</th>
            </tr>
          </thead>
          <tbody>
            @foreach($messages as $msg)
              <tr>
                <td>{{ $msg->name }}</td>
                <td>{{ $msg->email }}</td>
                <td>{{ $msg->subject }}</td>
                <td>{{ $msg->message }}</td>
                <td>{{ $msg->created_at->format('Y.m.d H:i') }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endif
  </div>
</section>

@include('layouts.partials.footer')

