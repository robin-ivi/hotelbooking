 <!-- { Header } start -->
 <header class="site-header">
      <div class="header-wrapper">
            <div class="me-auto flex-grow-1 d-flex align-items-center">
            <ul class="list-unstyled header-menu-nav">
                <li class="hdr-itm mob-hamburger">
                <a href="#!" class="app-head-link" id="mobile-collapse">
                    <div class="hamburger hamburger-arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                    </div>
                </a>
                </li>
            </ul>
            </div>

            <nav class="ms-auto">
                <ul class="header-menu-nav list-unstyled">
                    
                    <li class="hdr-itm dropdown user-dropdown ">
                        <a class="app-head-link dropdown-toggle no-caret me-0" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <span class="avtar"><img src="{{ url('') }}/assets/images/user/avatar-2.jpg" alt=""></span>
                        </a>
                        <div class="dropdown-menu header-dropdown">
                            <ul class="p-0">
                                <li class="dropdown-item ">
                                    <a href="{{ route('profile.show') }}" class="drp-link">
                                    Edit Profile
                                    </a>
                                </li>
                                <hr class="dropdown-divider">
                                <li class="dropdown-item ">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
        
                                        <x-dropdown-link href="{{ route('logout') }}"  class="drp-link"
                                                 @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- { Header } end -->