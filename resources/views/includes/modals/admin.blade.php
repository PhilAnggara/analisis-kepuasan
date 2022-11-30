<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Tambah Admin</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <form action="{{ route('kelola-admin.store') }}" method="post">
        @csrf
        <div class="modal-body">
          
          <div class="form-group">
            <label for="name">Nama Admin</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" autocomplete="off" required>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" autocomplete="off" required>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="off" required>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="off" required>
            @error('password_confirmation')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-bs-dismiss="modal">
            Tutup
          </button>
          <button type="submit" class="btn btn-primary icon icon-left ml-1">
            {{-- <i class="fal fa-user-plus me-2"></i> --}}
            Tambah
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

@foreach ($items as $item)
  <div class="modal fade text-left" id="reset-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel1">Reset Password</h5>
          <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <form action="{{ route('kelola-admin.update', $item->id) }}" method="post">
          @method('PUT')
          @csrf
          <div class="modal-body">

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="off" required>
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="password_confirmation">Konfirmasi Password</label>
              <input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="off" required>
              @error('password_confirmation')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">
              Tutup
            </button>
            <button type="submit" class="btn btn-primary icon icon-left ml-1">
              {{-- <i class="fal fa-user-plus me-2"></i> --}}
              Simpan
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endforeach