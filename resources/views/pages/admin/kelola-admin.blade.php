@extends('layouts.admin')
@section('title', 'Analisis Kepuasan')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Kelola Admin</h3>
      </div>
    </div>
  </div>

  <section class="section mt-4">
    <div class="row row-cols-1 row-cols-md-4 g-4">

      <div class="col">
        <div data-aos="zoom-in" data-aos-delay="100" class="card card-plus h-card h-350">
          <div class="card-body d-flex justify-content-center align-items-center">
            <i class="fas fa-user-plus fa-5x"></i>
            <a href="{{ route('admin-kusioner') }}" class="stretched-link"></a>
          </div>
        </div>
      </div>

      @foreach ($items as $item)
        <div class="col">
          <div data-aos="zoom-in" data-aos-delay="150" class="card h-card-img h-350">
            <img src="https://ui-avatars.com/api/?background=1faf5d&color=fff&bold=true&name={{ $item->name }}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{ $item->name }}</h5>
              <p class="card-subtitle text-muted">{{ $item->email }}</p>
            </div>
            <div class="card-footer py-2 text-center">
              <button class="btn btn-sm icon icon-left">
                <i class="fal fa-lock-keyhole"></i>
                Reset Password
              </button>
              <button class="btn btn-sm icon icon-left">
                <i class="fal fa-user-minus"></i>
                Hapus Admin
              </button>
            </div>
          </div>
        </div>
      @endforeach
      
    </div>
  </section>

</div>
@endsection