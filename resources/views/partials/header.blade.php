<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('Company/assets/img/SBM.png') }}" alt="Logo" style="width: 40px; height: auto; margin-right: 10px;">
            <h1 class="sitename">Sukses Bersama Mulia</h1><span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li class="dropdown">
                    <a href="{{ url('/about') }}" class="{{ request()->is('about*') ? 'active' : '' }}">
                        <span>About</span>
                    </a>
                </li>
                {{-- <li><a href="{{ url('/portfolio') }}"
                        class="{{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a></li> --}}
                
                </li>

                <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
    <a href="https://www.facebook.com/share/19D3ADGNtK/" class="facebook" target="_blank">
        <i class="bi bi-facebook"></i>
    </a>
</div>

    </div>
</header>