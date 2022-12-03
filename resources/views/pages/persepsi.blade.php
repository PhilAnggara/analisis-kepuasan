@extends('layouts.alt')
@section('title', 'Analisis Kepuasan')

@section('content')
<nav class="navbar navbar-light">
  <div class="container d-block alt-logo">
    <a href="{{ route('beranda-persepsi') }}"><i class="bi bi-chevron-left"></i></a>
    <a class="navbar-brand ms-4" href="{{ route('beranda-persepsi') }}">
      <img src="{{ url('frontend/images/logo-med.png') }}"/>
      <span>Kementerian Agama Kabupaten Minahasa</span>
    </a>
  </div>
</nav>

<div class="container pb-5">
  <div class="card shadow-sm mt-5">
    <div class="card-header">
      <h4 class="card-title">{{ $item->nama_kusioner }} (Kusioner Persepsi)</h4>
    </div>
    <div class="card-body">
      <p>{{ $item->deskripsi }}</p>
    </div>
  </div>

  <form action="{{ route('kusioner-persepsi.store') }}" method="post">
    @csrf
    @livewire('check-responden', ['item' => $item, 'responden' => $responden, 'responden2' => $responden2])
  </form>

</div>
@endsection