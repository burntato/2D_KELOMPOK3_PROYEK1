<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('assets/img/brand/dark.png') }}" class="navbar-brand-img" alt="...">
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
            <a
              class="nav-link{{ request()->path() == 'home' ? ' active' : '' }}"
              href="#navbar-dashboards"
              data-toggle="collapse"
              role="button"
              aria-expanded="{{ request()->path() == 'home' ? 'true' : 'false' }}"
              aria-controls="navbar-dashboards" />

              <i class="ni ni-shop text-primary"></i>
              <span class="nav-link-text">Dashboards</span>
            </a>
            <div
              class="collapse {{ request()->path() == 'home' ? 'show' : '' }}"
              id="navbar-dashboards" />
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{ route('home') }}" class="nav-link{{ request()->path() == 'home' ? ' active' : '' }}">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('home') }}" class="nav-link">Dashboard</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
              <i class="ni ni-ungroup text-orange"></i>
              <span class="nav-link-text">Examples</span>
            </a>
            <div class="collapse" id="navbar-examples">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Register</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Lock</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Timeline</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Profile</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
              <i class="ni ni-ui-04 text-info"></i>
              <span class="nav-link-text">Components</span>
            </a>
            <div class="collapse" id="navbar-components">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">Buttons</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Cards</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Grid</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Notifications</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Icons</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Typography</a>
                </li>
                <li class="nav-item">
                  <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">Multi level</a>
                  <div class="collapse show" id="navbar-multilevel">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Third level menu</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Just another link</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">One last link</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
              <i class="ni ni-single-copy-04 text-pink"></i>
              <span class="nav-link-text">Forms</span>
            </a>
            <div class="collapse" id="navbar-forms">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">Elements</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Components</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Validation</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
              <i class="ni ni-align-left-2 text-default"></i>
              <span class="nav-link-text">Tables</span>
            </a>
            <div class="collapse" id="navbar-tables">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">Tables</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Sortable</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Datatables</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
              <i class="ni ni-map-big text-primary"></i>
              <span class="nav-link-text">Maps</span>
            </a>
            <div class="collapse" id="navbar-maps">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">Google</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Vector</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-archive-2 text-green"></i>
              <span class="nav-link-text">Widgets</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-chart-pie-35 text-info"></i>
              <span class="nav-link-text">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-calendar-grid-58 text-red"></i>
              <span class="nav-link-text">Calendar</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>