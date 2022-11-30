@extends('layouts.admin')
@section('title', 'Analisis Kepuasan')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Analisis CSI & GAP</h3>
      </div>
    </div>
  </div>

  @php($aosDelay = 0)

  <section class="section mt-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">

      @foreach ($items as $item)
      @php($aosDelay += 100)
        <div class="col">
          <div data-aos="zoom-in" data-aos-delay="{{ $aosDelay }}" class="card h-100 h-card">
            <div class="card-body">
              <h5 class="card-title">{{ $item->nama_kusioner }}</h5>
              <p class="card-text"><small class="text-muted">{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM YYYY') }}</small></p>
              <p class="card-text">{{ $item->deskripsi }}</p>
              <a href="{{ route('analisis.detail', $item->id) }}" class="stretched-link"></a>
            </div>
            <div class="card-footer py-2">
              <i class="fal fa-users"></i>
              <small class="ms-2">{{ $item->responden->count() }} responden</small>
            </div>
          </div>
        </div>
      @endforeach
      
    </div>
  </section>

</div>
@endsection