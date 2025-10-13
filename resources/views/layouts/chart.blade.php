@include('layouts.partials.header')

<section class="home-slider owl-carousel img" style="background-image: url('{{ asset('images/bg_1.jpg') }}');">
  <div class="slider-item" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Diagram</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Kezdőlap</a></span> <span>Diagram</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section">
  <div class="container text-center">
    <h2 class="mb-4">Pizzák száma kategóriánként</h2>
    <canvas id="pizzaChart" width="600" height="300"></canvas>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const labels = {!! json_encode($labels) !!};
const data = {
  labels: labels,
  datasets: [
    {
      label: 'Pizzák száma',
      data: {!! json_encode($counts) !!},
      borderColor: 'rgba(255, 99, 132, 1)',
      backgroundColor: 'rgba(255, 99, 132, 0.5)',
      borderWidth: 2,
      borderRadius: 15,
      borderSkipped: false,
    }
  ]
};

const config = {
  type: 'bar',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Pizzák száma kategóriánként'
      }
    }
  },
};

new Chart(document.getElementById('pizzaChart'), config);
</script>

@include('layouts.partials.footer')
