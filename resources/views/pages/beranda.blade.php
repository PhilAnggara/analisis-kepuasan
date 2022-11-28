@extends('layouts.main')
@section('title', 'Analisis Kepuasan')

@section('content')
<div class="content-wrapper container">
  <div class="page-heading">
    <h3>Dashboard</h3>
  </div>
  <div class="page-content">
    <section class="row">
      <div class="col-12">
        <div class="card shadow">
          <div class="card-content jumbotron">
            <img class="card-img-top img-fluid" src="{{ url('frontend/images/jumbotron.jpg') }}" alt="">
            <div class="card-body text-center">
              <h4 class="card-title">Kusioner Tingkat Kepuasan Pelayanan PTSP</h4>
              <a href="{{ route('kusioner') }}" class="btn btn-lg btn-primary block">Mulai</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection