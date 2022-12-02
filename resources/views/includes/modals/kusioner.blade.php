<div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Edit Kusioner</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <form action="{{ route('kusioner.update', $item->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="modal-body">

          <div class="form-group">
            <label for="nama_kusioner">Nama Kusioner</label>
            <input type="text" id="nama_kusioner" class="form-control" name="nama_kusioner" autocomplete="off" value="{{ $item->nama_kusioner }}" required>
          </div>
          
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" required>{{ $item->deskripsi }}</textarea>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-bs-dismiss="modal">
            Tutup
          </button>
          <button type="submit" class="btn btn-primary icon icon-left ml-1">
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>