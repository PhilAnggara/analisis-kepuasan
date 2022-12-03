<div>
  <input type="hidden" name="id_responden" value="{{ $idResponden }}">
  <div class="card shadow-sm">
    @if (!$authorized)
      <div class="card-header">
        Data Diri
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <label class="form-label" for="nama">Nama</label>
            <select wire:model="idResponden" class="form-select" id="nama" required>
              <option value="" selected disabled>-- Pilih nama --</option>
              @foreach ($responden as $r)
                <option value="{{ $r->id }}">{{ $r->nama }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label" for="no_antrian">Nomor antrian</label>
            <select wire:model="nomorAntrian" class="form-select" id="no_antrian" required {{ !$idResponden ? 'disabled' : '' }}>
              <option value="" selected disabled>-- Pilih nomor antrian --</option>
              @foreach ($responden2 as $rs)
                <option value="{{ $rs->no_antrian }}">{{ $rs->no_antrian }}</option>
              @endforeach
              @if (!$idResponden)
                <option value="" selected disabled>Silahkan pilih nama anda terlebih dahulu...</option>
              @endif
            </select>
          </div>
        </div>
      </div>
    @else
      <div class="card-header">
        {{ $namaResponden }}
      </div>
    @endif
  </div>

  @if ($authorized)
  
    @foreach ($item->pertanyaan as $i)
      <div class="card shadow-sm">
        <div class="card-body">
          <p>{{ $loop->iteration }}. {{ $i->persepsi }}</p>
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
      <button type="submit"  class="btn btn-primary icon icon-left">
        <i class="fa fa-paper-plane me-2"></i>
        Submit
      </button>
    </div>

  @endif

</div>