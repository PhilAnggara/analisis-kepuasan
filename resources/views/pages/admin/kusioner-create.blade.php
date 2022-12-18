@extends('layouts.admin')
@section('title', 'Analisis Kepuasan')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Buat Kusioner</h3>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('kusioner.index') }}">Kusioner</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Buat Kusioner
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

  <section class="section mt-4">
    <form action="{{ route('kusioner.store') }}" method="post">
      @csrf
      <div class="row">
        
        <div class="col-12">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="form-group">
                <label for="nama_kusioner">Nama Kusioner</label>
                <input type="text" id="nama_kusioner" class="form-control" name="nama_kusioner" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
              </div>
            </div>
          </div>
        </div>
        
        @livewire('question')
  
        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary icon icon-left">
            <i class="fa fa-file-plus me-2"></i>
            Buat Kusioner
          </button>
        </div>
  
      </div>
    </form>
  </section>

</div>
@endsection

@push('addon-style')
  <link rel="stylesheet" href="{{ url('frontend/styles/loading.css') }}">
@endpush