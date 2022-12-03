<nav class="main-navbar">
  <div class="container">
    <ul>
      <li class="menu-item">
        <a href="{{ route('beranda') }}" class="menu-link {{ Request::is('/') ? 'fw-bold text-white' : '' }}">
          <span><i class="bi bi-grid-fill"></i> Kusioner Harapan</span>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('beranda-persepsi') }}" class="menu-link {{ Request::is('beranda-persepsi') ? 'fw-bold text-white' : '' }}">
          <span><i class="bi bi-file-earmark-text-fill"></i> Kusioner Persepsi</span>
        </a>
      </li>
    </ul>
  </div>
</nav>