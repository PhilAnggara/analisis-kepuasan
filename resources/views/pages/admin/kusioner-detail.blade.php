@extends('layouts.admin')
@section('title', 'Analisis Kepuasan')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Detail Kusioner</h3>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('kusioner.index') }}">Kusioner</a>
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
      <div class="col-12 col-md-12">
        <div data-aos="zoom-in" data-aos-delay="100" class="card shadow-sm">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 order-md-1 order-last">
                <h5 class="card-title">
                  {{ $item->nama_kusioner }}
                  <button class="btn btn-sm btn-light icon icon-left rounded-pill" data-bs-toggle="modal" data-bs-target="#edit">
                    <i class="fal fa-pen-to-square"></i>
                    Edit
                  </button>
                </h5>
              </div>
              <div class="col-md-6 d-flex justify-content-end order-md-2 order-first">
                <a href="{{ route('analisis.detail', $item->id) }}" class="btn btn-sm btn-outline-primary icon icon-left mb-3">
                  <i class="fad fa-chart-pie-simple"></i>
                  Analisis CSI & GAP
                </a>
              </div>
            </div>
            @livewire('switch-toggle', ['item' => $item])
            <p class="card-text">
              <small class="text-muted me-3">{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM YYYY') }}</small>
            </p>
            <p class="card-text">{{ $item->deskripsi }}</p>
          </div>
          <div class="card-footer py-2 d-flex">
            <div>
              <i class="fal fa-users text-warning"></i>
              <small class="ms-2">{{ $item->responden->count() }} responden kusioner harapan</small>
            </div>
            <div class="ms-5">
              <i class="fal fa-users text-success"></i>
              <small class="ms-2">{{ $item->respondenSelesai->count() }} responden kusioner persepsi</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div data-aos="zoom-in" data-aos-delay="200" class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">Kusioner Harapan</h5>
            @foreach ($pertanyaan as $hrpn)
              <p class="card-text">{{ $loop->iteration }}. {{ $hrpn->harapan }}</p>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col">
        <div data-aos="zoom-in" data-aos-delay="300" class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">Kusioner Persepsi</h5>
            @foreach ($pertanyaan as $prs)
              <p class="card-text">{{ $loop->iteration }}. {{ $prs->persepsi }}</p>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    
    <div class="row mt-4">
      <div class="col">
        <div data-aos="zoom-in" data-aos-delay="400" class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">Responden</h5>
            <div class="table-responsive">
              <table class="table table-striped table-hover table-bordered text-center" id="respondenTable">
                <thead class="table-success">
                  <tr>
                    <th class="text-center">Nama</th>
                    <th class="text-center">No. Telp</th>
                    <th class="text-center">Pendidikan</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Pekerjaan</th>
                    <th class="text-center" style="white-space:nowrap;">No. Antrian</th>
                    <th class="text-center">Status</th>
                  </tr>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($responden as $res)
                    <tr>
                      <td>{{ $res->nama }}</td>
                      <td>
                        <i class="fad fa-phone text-secondary"></i>
                        {{ $res->telp }}
                      </td>
                      <td>
                        {{-- <i class="fa fa-graduation-cap text-black-50"></i> --}}
                        {{ $res->pendidikan }}
                      </td>
                      <td style="white-space:nowrap;">
                        <i class="fad fa-location-dot text-danger"></i>
                        {{ $res->alamat }}
                      </td>
                      <td>{{ $res->pekerjaan }}</td>
                      <td>
                        <span class="badge text-bg-light">{{ $res->no_antrian }}</span>
                      </td>
                      <td>
                        @if ($res->selesai)
                          <span class="badge rounded-pill bg-light-primary">
                            <i class="fad fa-circle-check text-success"></i>
                            Selesai
                          </span>
                        @else
                          <span class="badge rounded-pill bg-light-secondary">
                            Belum Selesai
                          </span>
                        @endif
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

</div>
@include('includes.modals.kusioner')
@endsection

@push('addon-style')
  <link rel="stylesheet" href="{{ url('frontend/styles/loading.css') }}">
@endpush

@push('addon-script')
  <script>
    
    let dataTable = new simpleDatatables.DataTable(document.getElementById("respondenTable"), {
      labels: {
        placeholder: "Cari...",
        perPage: "{select}",
        noRows: "Responden tidak ditemukan",
        info: "Menampilkan {start} - {end} dari {rows} responden",
      }
    });
    
  </script>
@endpush