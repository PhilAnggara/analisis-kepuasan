<div>
  @for ($i = 0; $i < $count; $i++)
    <div class="col-12">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="form-group">
            <label for="harapan">Pertanyaan Harapan</label>
            <input type="text" id="harapan" class="form-control" name="pertanyaan[{{ $count }}][harapan]" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="persepsi">Pertanyaan Persepsi</label>
            <input type="text" id="persepsi" class="form-control" name="pertanyaan[{{ $count }}][persepsi]" autocomplete="off" required>
          </div>
        </div>
      </div>
    </div>
  @endfor
        
  <div class="col-12">
    <div class="card card-plus h-card">
      <div class="card-body d-flex justify-content-center align-items-center">
        <i class="fas fa-plus fa-5x"></i>
        <a href="#" class="stretched-link" wire:click="increment"></a>
      </div>
    </div>
  </div>
</div>