<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
                  <span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                   viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                   class="icon"><path
                              d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline
                              points="9 22 9 12 15 12 15 22"></polyline></svg>
                  </span>
            <span class="nav-link-title">Home</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.mods.index') }}">
                  <span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                   viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                   class="icon"><path
                              d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline
                              points="9 22 9 12 15 12 15 22"></polyline></svg>
                  </span>
            <span class="nav-link-title">Mods</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
                  <span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                   viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                   class="icon"><path
                              d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline
                              points="9 22 9 12 15 12 15 22"></polyline></svg>
                  </span>
            <span class="nav-link-title">Users</span>
        </a>
    </li>
</ul>
