@extends('layouts.alt')
@section('title', 'Analisis Kepuasan')

@section('content')
<nav class="navbar navbar-light">
  <div class="container d-block alt-logo">
    <a href="{{ route('beranda') }}"><i class="bi bi-chevron-left"></i></a>
    <a class="navbar-brand ms-4" href="{{ route('beranda') }}">
      <img src="{{ url('frontend/images/logo-med.png') }}"/>
      <span>Kementerian Agama Kabupaten Minahasa</span>
    </a>
  </div>
</nav>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h4 class="card-title">Kusioner Tingkat Kepuasan Pelayanan PTSP</h4>
    </div>
    <div class="card-body">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ea unde vel alias, eum quam necessitatibus dolorem similique placeat quibusdam?</p>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      Data Diri
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <label class="form-label" for="nama">Nama</label>
          <input type="text" id="nama" class="form-control" name="nama" required>
        </div>
        <div class="col-md-6">
          <label class="form-label" for="usia">Usia</label>
          <input type="number" id="usia" class="form-control" name="usia" required>
        </div>
        <div class="col-md-6">
          <label class="form-label" for="pendidikan">Pendidikan</label>
          <select class="form-select" name="pendidikan" id="pendidikan" required>
            <option value="" selected disabled>-- Pilih pendidikan --</option>
            <option>SD</option>
            <option>SMP</option>
            <option>SMA</option>
            <option>D3</option>
            <option>S1</option>
            <option>S2</option>
            <option>S3</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label" for="alamat">Alamat</label>
          <input type="text" id="alamat" class="form-control" name="alamat" required>
        </div>
        <div class="col-md-6">
          <label class="form-label" for="pekerjaan">Pekerjaan</label>
          <input type="text" id="pekerjaan" class="form-control" name="pekerjaan" required>
        </div>
        <div class="col-md-6">
          <label class="form-label" for="kunjungan">Kunjungan yang ke :</label>
          <input type="number" id="kunjungan" class="form-control" name="kunjungan" required>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection