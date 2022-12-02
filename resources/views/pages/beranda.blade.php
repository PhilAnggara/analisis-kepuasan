@extends('layouts.main')
@section('title', 'Analisis Kepuasan')

@section('content')
<div class="content-wrapper container">
  {{-- <div data-aos="fade-right" class="page-heading">
    <h3>Dashboard</h3>
  </div> --}}
  <div class="page-content">
    <section class="row">
      <div class="col-12">
        @foreach ($items as $item)
          <div data-aos="zoom-in" data-aos-delay="100" class="card jumbotron-card">
            <div class="card-content jumbotron">
              <img class="card-img-top img-fluid" src="{{ url('frontend/images/logo-ori.png') }}" alt="">
              <div class="card-body text-center">
                <h4 class="card-title">{{ $item->nama_kusioner }}</h4>
                <div class="dropdown">
                  <button class="btn btn-lg btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Mulai
                  </button>
                  <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href="{{ route('kusioner-harapan', $item->id) }}">Kusioner Harapan</a></li>
                    <li><a class="dropdown-item" href="{{ route('kusioner-persepsi', $item->id) }}">Kusioner Persepsi</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </div>
</div>
@endsection