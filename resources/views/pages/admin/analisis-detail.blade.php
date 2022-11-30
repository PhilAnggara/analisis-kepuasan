@extends('layouts.admin')
@section('title', 'Analisis Kepuasan')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>{{ $item->nama_kusioner }}</h3>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('analisis') }}">Analisis CSI & GAP</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              {{ $item->nama_kusioner }}
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

  <section class="section mt-4">
    <div class="row">
      
      <div class="col-12 col-md-6">
        <div data-aos="zoom-in" data-aos-delay="100" class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">Harapan</h5>
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th class="table-success" rowspan="2">Responden</th>
                  <th class="table-success" colspan="100">Pertanyaan / Pernyataan</th>
                </tr>
                <tr>
                  @foreach ($item->pertanyaan as $pertanyaan)
                    <td><small class="fw-light fst-italic">{{ $loop->iteration }}</small></td>
                  @endforeach
                </tr>
              </thead>
              <tbody>
                @foreach ($responden as $r)
                  <tr>
                    <td><small class="fw-light fst-italic">{{ $loop->iteration }}</small></td>
                    @foreach ($r->jawaban as $jawaban)
                      <td>{{ $jawaban->harapan }}</td>
                    @endforeach
                  </tr>
                @endforeach
              </tbody>
              <tfoot class="table-success">
                <tr>
                  <th>Total</th>
                  @foreach ($total as $t)
                    <td>{{ $t['harapan'] }}</td>
                  @endforeach
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      
      <div class="col-12 col-md-6">
        <div data-aos="zoom-in" data-aos-delay="200" class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">Persepsi</h5>
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th class="table-success" rowspan="2">Responden</th>
                  <th class="table-success" colspan="100">Pertanyaan / Pernyataan</th>
                </tr>
                <tr>
                  @foreach ($item->pertanyaan as $pertanyaan)
                    <td><small class="fw-light fst-italic">{{ $loop->iteration }}</small></td>
                  @endforeach
                </tr>
              </thead>
              <tbody>
                @foreach ($responden as $r)
                  <tr>
                    <td><small class="fw-light fst-italic">{{ $loop->iteration }}</small></td>
                    @foreach ($r->jawaban as $jawaban)
                      <td>{{ $jawaban->persepsi }}</td>
                    @endforeach
                  </tr>
                @endforeach
              </tbody>
              <tfoot class="table-success">
                <tr>
                  <th>Total</th>
                  @foreach ($total as $t)
                    <td>{{ $t['persepsi'] }}</td>
                  @endforeach
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      
      <div class="col-12 col-md-3">
        <div data-aos="zoom-in" data-aos-delay="300" class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">MIS & MSS</h5>
            <table class="table table-bordered text-center">
              <thead class="table-success">
                <tr>
                  <th></th>
                  <th>MIS</th>
                  <th>MSS</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($mean as $m)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $m['harapan'] }}</td>
                    <td>{{ $m['persepsi'] }}</td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot class="table-success">
                <tr>
                  <th>Total</th>
                  <td>{{ $mean->sum('harapan') }}</td>
                  <td>{{ $mean->sum('persepsi') }}</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      
      <div class="col-12 col-md-3">
        <div data-aos="zoom-in" data-aos-delay="400" class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">WF, WS & WT</h5>
            <table class="table table-bordered text-center">
              <thead class="table-success">
                <tr>
                  <th></th>
                  <th>WF</th>
                  <th>WS</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($wfws as $w)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ number_format($w['wf'], 2) }}</td>
                    <td>{{ number_format($w['ws'], 2) }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th class="table-success">WT</th>
                  <th>{{ number_format($wt, 2) }}</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
      
      <div class="col-12 col-md-6">
        <div data-aos="zoom-in" data-aos-delay="500" class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">CSI</h5>
            <div id="CSI"></div>
          </div>
        </div>
      </div>
      
      <div class="col-12 col-md-6">
        <div data-aos="zoom-in" data-aos-delay="600" class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">GAP</h5>
            <table class="table table-bordered text-center">
              <thead class="table-success">
                <tr>
                  <th></th>
                  <th>Rata-rata Skor Harapan</th>
                  <th>Rata-rata Skor Persepsi</th>
                  <th>GAP</th>
                  <th>Rank</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($gap as $g)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $g['harapan'] }}</td>
                    <td>{{ $g['persepsi'] }}</td>
                    <td>{{ $g['gap'] }}</td>
                    <td>{{ $g['rank'] }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </section>

</div>
@endsection



@push('addon-script')
<script>
  var optionsCSI = {
    series: [{{ $csi }}, {{ 100 - $csi }}],
    labels: ["Puas", "Tidak Puas"],
    colors: ["#2ba15e", "#D1E7DD"],
    chart: {
      type: "donut",
      width: "100%",
      height: 500,
    },
    legend: {
      position: "bottom",
    },
    plotOptions: {
      pie: {
        donut: {
          size: "30%",
        },
      },
    },
  }

  var chartCSI = new ApexCharts(document.querySelector("#CSI"), optionsCSI);
  chartCSI.render();
</script>
@endpush