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

<div class="container pb-5">
  <div class="card shadow-sm mt-5">
    <div class="card-header">
      <h4 class="card-title">{{ $item->nama_kusioner }} (Kusioner Harapan)</h4>
    </div>
    <div class="card-body">
      <p>{{ $item->deskripsi }}</p>
    </div>
  </div>

  <form action="{{ route('kusioner-harapan.store') }}" method="post">
    @csrf
    <input type="hidden" name="id_kusioner" value="{{ $item->id }}">
    <div class="card shadow-sm">
      <div class="card-header">
        Data Diri
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <label class="form-label" for="nama">Nama</label>
            <input type="text" id="nama" class="form-control" name="nama" onkeydown="return /[a-z, ]/i.test(event.key)" autocomplete="off" required>
          </div>
          <div class="col-md-6">
            <label class="form-label" for="telp">No. Telepon</label>
            <input type="text" id="telp" class="form-control" name="telp" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" autocomplete="off" maxlength="12" required>
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
            <input type="text" id="alamat" class="form-control" name="alamat" autocomplete="off" required>
          </div>
          <div class="col-md-6">
            <label class="form-label" for="pekerjaan">Pekerjaan</label>
            <input type="text" id="pekerjaan" class="form-control" name="pekerjaan" autocomplete="off" required>
          </div>
          <div class="col-md-6">
            <label class="form-label" for="no_antrian">Nomor Antrian :</label>
            <input type="text" id="no_antrian" class="form-control" pattern="[A-Za-z]{3}" name="no_antrian" autocomplete="off" maxlength="4" required>
          </div>
        </div>
      </div>
    </div>
  
    @foreach ($item->pertanyaan as $i)
      <div class="card shadow-sm">
        <div class="card-body">
          <p>{{ $loop->iteration }}. {{ $i->harapan }}</p>
          <input type="hidden" name="pertanyaan[{{ $i->id }}]" value="">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pertanyaan[{{ $i->id }}]" id="pilihan-{{ $i->id }}-1" value="1" required>
            <label class="form-check-label" for="pilihan-{{ $i->id }}-1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pertanyaan[{{ $i->id }}]" id="pilihan-{{ $i->id }}-2" value="2" required>
            <label class="form-check-label" for="pilihan-{{ $i->id }}-2">2</label>
          </div>      
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pertanyaan[{{ $i->id }}]" id="pilihan-{{ $i->id }}-3" value="3" required>
            <label class="form-check-label" for="pilihan-{{ $i->id }}-3">3</label>
          </div>      
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pertanyaan[{{ $i->id }}]" id="pilihan-{{ $i->id }}-4" value="4" required>
            <label class="form-check-label" for="pilihan-{{ $i->id }}-4">4</label>
          </div>      
        </div>
      </div>
    @endforeach
  
    <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-primary icon icon-left">
        <i class="fa fa-paper-plane me-2"></i>
        Submit
      </button>
    </div>
  </form>

</div>
@endsection