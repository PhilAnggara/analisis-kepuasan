<nav class="main-navbar">
  <div class="container">
    <ul>
      <li class="menu-item">
        <a href="{{ route('beranda') }}" class="menu-link fw-bold text-white">
          <span><i class="bi bi-grid-fill"></i> Dashboard</span>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('beranda') }}" class="menu-link">
          <span><i class="bi bi-file-earmark-text-fill"></i> Kusioner</span>
        </a>
      </li>
      @auth
        @if (auth()->user()->role == 'Admin')
          <li class="menu-item">
            <a href="{{ route('admin') }}" class="menu-link">
              <span><i class="bi bi-person-workspace"></i> Admin Panel</span>
            </a>
          </li>
        @endif
      @endauth
    </ul>
  </div>
</nav>