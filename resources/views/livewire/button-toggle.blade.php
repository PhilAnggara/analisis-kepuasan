<div>
  @if ($item->show)
    {{-- <span class="badge rounded-pill bg-light-primary">
      <i class="fa fa-toggle-on text-primary"></i>
      Aktif
    </span> --}}
    <button wire:click="switch" class="btn btn-sm bg-light-primary rounded-pill btn-toggle-active">
      Aktif
      <i wire:loading.remove class="text-primary fa fa-toggle-on"></i>
      <i wire:loading class="text-primary fa fa-circle-notch fa-spin"></i>
      {{-- <i wire:loading class="text-primary fa fa-toggle-on fa-flip"></i> --}}
    </button>
  @else
    {{-- <span class="badge rounded-pill bg-light-secondary">
      <i class="fa fa-toggle-off"></i>
      Tidak Aktif
    </span> --}}
    <button wire:click="switch" class="btn btn-sm btn-light rounded-pill">
      Tidak Aktif
      <i wire:loading.remove class="fa fa-toggle-off"></i>
      <i wire:loading class="fa fa-circle-notch fa-spin"></i>
      {{-- <i wire:loading class="fa fa-toggle-off fa-flip"></i> --}}
    </button>
  @endif
</div>