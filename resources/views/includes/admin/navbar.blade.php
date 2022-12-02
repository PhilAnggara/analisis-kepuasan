<header class="mb-3">
  <nav class="navbar navbar-expand navbar-light navbar-top">
    <div class="container-fluid">
      <a href="#" class="burger-btn d-block">
        <i class="bi bi-justify fs-3"></i>
      </a>

      <h3 class="navbar-title ms-3">Kementerian Agama Kabupaten Minahasa</h3>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="dropdown ms-auto">
          <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="user-menu d-flex">
              <div class="user-name text-end me-3">
                <h6 class="mb-0 text-gray-600">Hello, {{ Str::before(auth()->user()->name, ' ') }}</h6>
                <p class="mb-0 text-sm text-gray-600">{{ auth()->user()->role }}</p>
              </div>
              <div class="user-img d-flex align-items-center">
                <div class="avatar avatar-md">
                  <img src="https://ui-avatars.com/api/?background=00923F&color=fff&bold=true&name={{ auth()->user()->name }}"/>
                </div>
              </div>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
            style="min-width: 11rem">
            <li>
              <h6 class="dropdown-header">{{ auth()->user()->name }}</h6>
            </li>
            <li>
              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#resetPassword">
                <i class="icon-mid fal fa-lock-keyhole me-2"></i>
                Reset Password
              </a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="#" onclick="keluar()">
                <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                Logout
              </a>
              <form action="{{ route('logout') }}" id="keluar" method="POST">
                @csrf
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>


<div class="modal fade text-left" id="resetPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Reset Password</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <form action="{{ route('kelola-admin.update', auth()->user()->id) }}" method="post">
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