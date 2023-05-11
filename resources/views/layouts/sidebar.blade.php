<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
  <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
      <i class="bi bi-grid"></i>
      <span>{{ __('Dashboard') }}</span>
      </x-nav-link>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>{{ __('News') }}</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content " data-bs-parent="#sidebar-nav">
      <li>
      <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                                {{ __('Show all') }}
                            </x-nav-link>
      </li>
      <li>
      <x-nav-link :href="route('admin.create')" :active="request()->routeIs('admin.create')">
                                {{ __('Create') }}
                            </x-nav-link>
      </li>
  
    </ul>
  </li><!-- End Components Nav -->

</ul>

</aside><!-- End Sidebar-->