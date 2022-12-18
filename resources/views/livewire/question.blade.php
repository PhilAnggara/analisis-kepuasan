<div>
  @for ($i = 1; $i <= $count; $i++)
    <div class="col-12">
      <div class="card shadow-sm">
        <h5 class="card-header">
          #{{ $i }}
        </h5>
        <div class="card-body">
          <div class="form-group">
            <label for="harapan">Pertanyaan Harapan</label>
            <input type="text" id="pertanyaan[{{ $i }}][harapan]" class="form-control" name="pertanyaan[{{ $i }}][harapan]" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="persepsi">Pertanyaan Persepsi</label>
            <input type="text" id="pertanyaan[{{ $i }}][persepsi]" class="form-control" name="pertanyaan[{{ $i }}][persepsi]" autocomplete="off" required>
          </div>
        </div>
      </div>
    </div>
  @endfor
  
  <div wire:loading class="col-12">
    <div class="card shadow-sm p-4 bg-light">
      <div class="card-body d-flex justify-content-center align-items-center p-5">
        <div class="la-line-scale-party la-dark la-3x">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
  </div>
        
  <div class="col-12">
    <div class="card p-4 card-plus h-card">
      <div class="card-body d-flex justify-content-center align-items-center p-5">
        <i class="fas fa-plus fa-5x"></i>
        <a href="#" class="stretched-link" wire:click.prevent="addNew"></a>
      </div>
    </div>
  </div>
</div>