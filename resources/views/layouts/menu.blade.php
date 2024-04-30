 <!-- { navigation menu } start -->
 <aside class="app-sidebar app-light-sidebar">
    <div class="app-navbar-wrapper">
      <div class="brand-link brand-logo">
        <a href="/dashboard" class="b-brand">
          <!-- ========   change your logo hear   ============ -->
          <img src="{{ url('') }}/assets/images/logo-dark.svg"  alt="" class="logo logo-lg"/>
        </a>
      </div>
      <div class="navbar-content">

        <ul class="app-navbar">
          
          <li class="nav-item nav-hasmenu">
            <a href="/dashboard" class="nav-link"><span class="nav-icon"><i class="ti ti-layout-2"></i></span><span
                class="nav-text">Dashboard</span><span class="nav-arrow"><i data-feather="chevron-right"></i></span></a>
          </li>
          <li class="nav-item nav-caption">
            <label>PAGES</label>
          </li>
          <li class="nav-item nav-hasmenu">
            <a href="#!" class="nav-link"><span class="nav-icon"><i class="ti ti-layout-2"></i></span><span
                class="nav-text">Room</span><span class="nav-arrow"><i data-feather="chevron-right"></i></span></a>
            <ul class="nav-submenu">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('roomCategory-list')}}">Add Room Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/calendar.html">Calendar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/analytics.html">Analytics</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </aside>
  <!-- { navigation menu } end -->