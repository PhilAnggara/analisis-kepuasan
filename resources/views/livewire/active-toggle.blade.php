<div>
  <div class="form-check form-switch active-switch">
    <input wire:model="check" class="form-check-input" type="checkbox" id="aktif" {{ $item->show ? 'checked' : '' }}/>
    <label class="form-check-label" for="aktif">
      @if ($item->show)
        <span wire:loading.remove>Aktif</span>
      @else
        <span wire:loading.remove>Tidak Aktif</span>
      @endif
      <div wire:loading>
        <div class="la-line-scale-party la-dark la-sm">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </label>
  </div>
</div>