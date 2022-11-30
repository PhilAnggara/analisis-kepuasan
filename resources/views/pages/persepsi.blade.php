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
      <h4 class="card-title">Kusioner Persepsi</h4>
    </div>
    {{-- <div class="card-body">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ea unde vel alias, eum quam necessitatibus dolorem similique placeat quibusdam?</p>
    </div> --}}
  </div>

  <div class="card shadow-sm">
    <div class="card-header">
      Responden
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col">
          <select class="form-select" name="responden" id="responden" required>
            <option value="" selected disabled>-- Pilih responden --</option>
            @foreach ($responden as $r)
              <option value="{{ $r->id }}">{{ $r->nama }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
  </div>

  @foreach ($item->pertanyaan as $i)
    <div class="card shadow-sm">
      <div class="card-body">
        <p>{{ $loop->iteration }}. {{ $i->persepsi }}</p>
        <input type="hidden" name="pertanyaan[{{ $i->id }}]" value="">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="pertanyaan[{{ $i->id }}]" id="pilihan-{{ $i->id }}-1">
          <label class="form-check-label" for="pilihan-{{ $i->id }}-1">1</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="pertanyaan[{{ $i->id }}]" id="pilihan-{{ $i->id }}-2">
          <label class="form-check-label" for="pilihan-{{ $i->id }}-2">2</label>
        </div>      
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="pertanyaan[{{ $i->id }}]" id="pilihan-{{ $i->id }}-3">
          <label class="form-check-label" for="pilihan-{{ $i->id }}-3">3</label>
        </div>      
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="pertanyaan[{{ $i->id }}]" id="pilihan-{{ $i->id }}-4">
          <label class="form-check-label" for="pilihan-{{ $i->id }}-4">4</label>
        </div>      
      </div>
    </div>
  @endforeach

  <div class="d-flex justify-content-end">
    <button class="btn btn-primary icon icon-left">
      <i class="fa fa-paper-plane me-2"></i>
      Submit
    </button>
  </div>

</div>
@endsection