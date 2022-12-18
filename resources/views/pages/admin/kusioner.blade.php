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

  @php($aosDelay = 100)

  <section class="section mt-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">

      <div class="col">
        <div data-aos="zoom-in" data-aos-delay="{{ $aosDelay }}" class="card h-100 card-plus h-card">
          <div class="card-body d-flex justify-content-center align-items-center">
            <i class="fas fa-plus fa-5x"></i>
            <a href="{{ route('kusioner.create') }}" class="stretched-link"></a>
          </div>
        </div>
      </div>

      @foreach ($items as $item)
        @php($aosDelay += 100)
        <div class="col">
          <div data-aos="zoom-in" data-aos-delay="{{ $aosDelay }}" class="card h-100 h-card">
            <div class="card-body">
              <h5 class="card-title">
                {{ $item->nama_kusioner }}
              </h5>
              <p class="card-text"><small class="text-muted">{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM YYYY') }}</small></p>
              <p class="card-text">{{ $item->deskripsi }}</p>
              <a href="{{ route('kusioner.show', $item->id) }}" class="stretched-link"></a>
            </div>
            <div class="card-footer py-2 d-flex justify-content-between" style="z-index: 10000">
              <div>
                <i class="fal fa-users"></i>
                <small class="ms-2">{{ $item->responden->count() }} responden</small>
              </div>
              @livewire('button-toggle', ['item' => $item])
            </div>
          </div>
        </div>
      @endforeach
      
    </div>
  </section>

</div>
@endsection