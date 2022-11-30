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

  @if ($errors->any())
    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <i class="fad fa-circle-exclamation"></i>
      <div class="ms-3">
        Ups, ada yang tidak beres! Periksa kembail inputan anda.
      </div>
    </div>
  @endif

  @php($aosDelay = 100)

  <section class="section mt-4">
    <div class="row row-cols-1 row-cols-md-4 g-4">

      <div class="col">
        <div data-aos="zoom-in" data-aos-delay="{{ $aosDelay }}" class="card card-plus h-card h-100 h-350">
          <div class="card-body d-flex justify-content-center align-items-center">
            <i class="fas fa-user-plus fa-5x"></i>
            <a href="#" data-bs-toggle="modal" data-bs-target="#tambah" class="stretched-link"></a>
          </div>
        </div>
      </div>

      @foreach ($items as $item)
        @php($aosDelay += 100)
        <div class="col">
          <div data-aos="zoom-in" data-aos-delay="{{ $aosDelay }}" class="card h-card-img h-100 h-350">
            <img src="https://ui-avatars.com/api/?background=1faf5d&color=fff&bold=true&name={{ $item->name }}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{ $item->name }}</h5>
              <p class="card-subtitle text-muted">{{ $item->email }}</p>
            </div>
            <div class="card-footer py-2 text-center">
              <button class="btn btn-sm icon icon-left" data-bs-toggle="modal" data-bs-target="#reset-{{ $item->id }}">
                <i class="fal fa-lock-keyhole"></i>
                Reset Password
              </button>
              <button class="btn btn-sm icon icon-left" onclick="hapusData({{ $item->id }}, 'Hapus Admin', 'Yakin ingin menghapus {{ $item->name }}?')">
                <i class="fal fa-user-minus"></i>
                Hapus Admin
              </button>
              <form action="{{ route('kelola-admin.destroy', $item->id) }}" id="hapus-{{ $item->id }}" method="POST">
                @method('delete')
                @csrf
              </form>
            </div>
          </div>
        </div>
      @endforeach
      
    </div>
  </section>

</div>
@include('includes.modals.admin')
@endsection



@push('addon-script')
  @if ($errors->any())
  <script>
    Swal.fire({
      title: 'Ups, ada yang tidak beres!',
      text: "Periksa kembail inputan anda.",
      icon: 'error',
      confirmButtonColor: '#00923F'
    })
  </script>
  @endif
@endpush