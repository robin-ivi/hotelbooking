 <!-- { navigation menu } start -->
 <aside class="app-sidebar app-light-sidebar">
    <div class="app-navbar-wrapper">
      <div class="brand-link brand-logo">
        <a href="/dashboard" class="b-brand">
          <!-- ========   change your logo hear   ============ -->
          <img src="https://thekrishnayan.cremeclients.com/wp-content/uploads/2024/03/Frame-155.png"  alt="" class="logo logo-lg"/>
        </a>
      </div>
      <div class="navbar-content">

        <ul class="app-navbar">
          
          <li class="nav-item nav-hasmenu">
            <a href="/dashboard" class="nav-link"><span class="nav-icon"><i class="ti ti-layout-2"></i></span><span
                class="nav-text">Dashboard</span></a>
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
                <a class="nav-link" href="{{ url('rooms')}}">Room</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-hasmenu">
            <a href="#!" class="nav-link"><span class="nav-icon"><i class="ti ti-user"></i></span><span
                class="nav-text">Booking</span><span class="nav-arrow"><i data-feather="chevron-right"></i></span></a>
            <ul class="nav-submenu">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('booking')}}">Add New Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('booking-list') }}">Booking List</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-hasmenu">
            <a href="{{ url('inoice-list') }}" class="nav-link"><span class="nav-icon"><i class="ti ti-receipt"></i></span><span
                class="nav-text">Inoive</span></a>
          </li>
        </ul>
      </div>
    </div>
  </aside>
  <!-- { navigation menu } end -->