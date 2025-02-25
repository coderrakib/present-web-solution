<div class="sidebar border border-right col-md-3 col-lg-3 p-4 bg-body-tertiary">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a wire:navigate href="{{ route('admin.dashboard') }}" class="nav-link @if(Route::currentRouteName() =='admin.dashboard') active @endif">
              <svg class="bi pe-none me-2" width="16" height="16"><i class="bi bi-house"></i></svg>
              Dashboard
            </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16"><i class="bi bi-person-circle"></i></svg>
            Admin Profile
          </a>
        </li>
        <li class="nav-item">
          <a wire:navigate href="{{ route('admin.setting') }}" class="nav-link @if(Route::currentRouteName() =='admin.setting') active @endif">
            <svg class="bi pe-none me-2" width="16" height="16"><i class="bi bi-gear"></i></svg>
            Settings
          </a>
        </li>
        <li>
            <div class="dropdown">
                <button class="nav-link link-body-emphasis dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg class="bi pe-none me-2" width="16" height="16"><i class="bi bi-person-gear"></i></svg>
                    Services
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Service Categories</a></li>
                    <li><a class="dropdown-item" href="#">Add Service</a></li>
                  </ul>
            </div>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16"><i class="bi bi-star-half"></i></svg>
            Portfolio
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16"><i class="bi bi-list-task"></i></svg>
              Contact Lists
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16"><i class="bi bi-person"></i></svg>
              Our Team
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16"><i class="bi bi-tag"></i></svg>
              Package Pricing
          </a>
        </li>
    </ul>
</div>