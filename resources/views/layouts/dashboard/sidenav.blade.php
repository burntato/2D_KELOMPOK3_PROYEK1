<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="{{ route('home') }}">
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('home') }}">
              <!-- <i class="ni ni-shop text-primary"></i> -->
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <!-- new sidebar link -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('lansia.index') }}">
              <!-- <i class="ni ni-shop text-primary"></i> -->
              <span class="nav-link-text">Lansia</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('balita.index') }}">
              <!-- <i class="ni ni-shop text-primary"></i> -->
              <span class="nav-link-text">Balita</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('remaja.index') }}">
              <!-- <i class="ni ni-shop text-primary"></i> -->
              <span class="nav-link-text">Remaja</span>
            </a>
          </li>

          {{-- MAINTENANCE --}}

          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('dewasa.index') }}">
              <!-- <i class="ni ni-shop text-primary"></i> -->
              <span class="nav-link-text">Dewasa</span>
            </a>
          </li> --}}

          <!-- copy till this -->
        </ul>
      </div>
    </div>
  </div>
</nav>
