@extends('layouts.admin')
@section('title', 'Analisis Kepuasan')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Dashboard</h3>
      </div>
    </div>
  </div>

  <section class="section mt-5">
    <div class="row">

      {{-- <div class="col-12 col-md-3">
        <div data-aos="zoom-in" data-aos-delay="100" class="card shadow-sm">
          <div class="card-header">
            <h4>Responden Terakhir</h4>
          </div>
          <div class="card-content pb-4">
            <div class="recent-message d-flex px-4 py-3">
              <div class="avatar avatar-lg">
                <img src="https://ui-avatars.com/api/?background=1faf5d&color=fff&bold=true&name=GP"/>
              </div>
              <div class="name ms-4">
                <h5 class="mb-0">Geovany Pitoy</h5>
                <small class="text-muted mb-0">5 menit yang lalu</small>
              </div>
            </div>
            <div class="recent-message d-flex px-4 py-3">
              <div class="avatar avatar-lg">
                <img src="https://ui-avatars.com/api/?background=1faf5d&color=fff&bold=true&name=SR"/>
              </div>
              <div class="name ms-4">
                <h5 class="mb-0">Serwin Rumagit</h5>
                <small class="text-muted mb-0">20 menit yang lalu</small>
              </div>
            </div>
            <div class="recent-message d-flex px-4 py-3">
              <div class="avatar avatar-lg">
                <img src="https://ui-avatars.com/api/?background=1faf5d&color=fff&bold=true&name=EM"/>
              </div>
              <div class="name ms-4">
                <h5 class="mb-0">Enggo Merentek</h5>
                <small class="text-muted mb-0">1 jam yang lalu</small>
              </div>
            </div>
            <div class="recent-message d-flex px-4 py-3">
              <div class="avatar avatar-lg">
                <img src="https://ui-avatars.com/api/?background=1faf5d&color=fff&bold=true&name=GL"/>
              </div>
              <div class="name ms-4">
                <h5 class="mb-0">Glen Lengkong</h5>
                <small class="text-muted mb-0">1 jam yang lalu</small>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

      <div class="col-12 col-md-12">
        <div data-aos="zoom-in" data-aos-delay="150" class="card shadow-sm">
          <div class="card-header">
            <h4>Responden Bulanan</h4>
          </div>
          <div class="card-body">
            <div id="respondenBulanan"></div>
          </div>
        </div>
      </div>
      
    </div>
  </section>

</div>
@endsection



@push('addon-script')
<script>
  var optionsRespondenBulanan = {
    chart: {
      type: 'bar',
      height: 500,
      zoom: {
        enabled: false
      }
    },
    plotOptions: {
      bar: {
        borderRadius: 10
      }
    },
    grid: {
      row: {
        colors: ['#f3f3f3', 'transparent'],
        opacity: 0.5
      },
    },
    colors:'#2ba15e',
    series: [{
      name: "Responden",
      data: {!! json_encode($respondenBulanan[0]['jumlah']) !!}
    }],
    xaxis: {
      categories: {!! json_encode($respondenBulanan[0]['bulan']) !!},
    },
  };

  var chartRespondenBulanan = new ApexCharts(document.querySelector("#respondenBulanan"), optionsRespondenBulanan);
  chartRespondenBulanan.render();

  // change text on legend
  var svg = document.querySelector('.exportSVG');
  var png = document.querySelector('.exportPNG');
  var csv = document.querySelector('.exportCSV');
  svg.innerHTML = svg.innerHTML.replace('Download SVG', 'Unduh SVG');
  png.innerHTML = png.innerHTML.replace('Download PNG', 'Unduh PNG');
  csv.innerHTML = csv.innerHTML.replace('Download CSV', 'Unduh CSV');
</script>
@endpush