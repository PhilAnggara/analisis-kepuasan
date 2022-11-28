<div class="header-top">
  <div class="container">
    <div class="logo homepage-logo">
      <a class="d-flex align-items-center" href="{{ route('beranda') }}">
        <img src="{{ url('frontend/images/logo-med.png') }}" alt="Logo" />
        <h3>Kementerian Agama Kabupaten Minahasa</h3>
      </a>
    </div>
    <div class="header-top-right">
      
      @guest
        <a href="{{ route('login') }}" class="btn btn-outline-primary">Admin</a>
      @endguest

      @auth
        <div class="dropdown">
          <a href="#" id="topbarUserDropdown"
            class="user-dropdown d-flex align-items-center dropend dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <div class="avatar avatar-md2">
              <img src="https://ui-avatars.com/api/?background=00923F&color=fff&bold=true&name={{ auth()->user()->name }}" alt="Avatar" />
            </div>
            <div class="text">
              <h6 class="user-dropdown-name">{{ auth()->user()->name }}</h6>
              <p class="user-dropdown-status text-sm text-muted">
                {{ auth()->user()->role }}
              </p>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
            <li>
              <a class="dropdown-item" href="{{ route('admin') }}">
                <i class="icon-mid bi bi-person-workspace me-2"></i>
                Admin Panel
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
      @endauth

      <!-- Burger button responsive -->
      <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
      </a>
    </div>
  </div>
</div>