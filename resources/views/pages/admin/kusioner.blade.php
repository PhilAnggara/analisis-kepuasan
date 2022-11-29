@extends('layouts.admin')
@section('title', 'Analisis Kepuasan')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Kusioner</h3>
      </div>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
    <div class="col">
      <div data-aos="zoom-in" data-aos-delay="100" class="card h-100 card-plus h-card">
        <div class="card-body d-flex justify-content-center align-items-center">
          <i class="fas fa-plus fa-5x"></i>
          <a href="{{ route('admin-kusioner') }}" class="stretched-link"></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div data-aos="zoom-in" data-aos-delay="150" class="card h-100 h-card">
        <div class="card-body">
          <h5 class="card-title">Nama Kusioner</h5>
          <p class="card-text"><small class="text-muted">27 November 2022</small></p>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, nulla.</p>
          <a href="{{ route('admin-kusioner') }}" class="stretched-link"></a>
        </div>
        <div class="card-footer py-2">
          <i class="fal fa-users"></i>
          <small class="ms-2">21 responden</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div data-aos="zoom-in" data-aos-delay="200" class="card h-100 h-card">
        <div class="card-body">
          <h5 class="card-title">Nama Kusioner</h5>
          <p class="card-text"><small class="text-muted">27 Oktober 2022</small></p>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur, adipisci!</p>
          <a href="{{ route('admin-kusioner') }}" class="stretched-link"></a>
        </div>
        <div class="card-footer py-2">
          <i class="fal fa-users"></i>
          <small class="ms-2">21 responden</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div data-aos="zoom-in" data-aos-delay="250" class="card h-100 h-card">
        <div class="card-body">
          <h5 class="card-title">Nama Kusioner</h5>
          <p class="card-text"><small class="text-muted">27 September 2022</small></p>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ratione!</p>
          <a href="{{ route('admin-kusioner') }}" class="stretched-link"></a>
        </div>
        <div class="card-footer py-2">
          <i class="fal fa-users"></i>
          <small class="ms-2">21 responden</small>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection