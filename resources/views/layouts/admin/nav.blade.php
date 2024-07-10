<header class="top-header">
    <nav class="navbar navbar-expand align-items-center gap-4">
      <div class="search-bar flex-grow-1">
        <div class="position-relative">
          <input class="form-control rounded-5 px-5 search-control d-lg-block d-none" type="text" placeholder="Search">
          <span class="material-icons-outlined position-absolute d-lg-block d-none ms-3 translate-middle-y start-0 top-50">search</span>
          <span class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 search-close">close</span>
          <div class="search-popup p-3">
            <div class="card rounded-4 overflow-hidden">
              <div class="card-header d-lg-none">
                <div class="position-relative">
                  <input class="form-control rounded-5 px-5 mobile-search-control" type="text" placeholder="Search">
                  <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                  <span class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 mobile-search-close">close</span>
                 </div>
              </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        <li class="nav-item dropdown">
          <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
             <img src="https://s1.bukalapak.com/attachment/633922/kelebihan_bisnis_online_image_2.jpg" class="rounded-circle p-1 border" width="45" height="45" alt="">
          </a>
          <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
            <a class="dropdown-item  gap-2 py-2" href="javascript:;">
              <div class="text-center">
                <img src="https://s1.bukalapak.com/attachment/633922/kelebihan_bisnis_online_image_2.jpg" class="rounded-circle p-1 shadow mb-3" width="90" height="90"
                  alt="">
                <h5 class="user-name mb-0 fw-bold">Hello, {{Auth::user()->name}}</h5>
              </div>
            </a>
            <hr class="dropdown-divider">
            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
            class="material-icons-outlined">power_settings_new</i>Logout
            <form action="{{route('logout')}}" method="POST" id="logout-form">
                @csrf</form></a>
          </div>
        </li>
      </ul>
    </nav>
  </header>
