<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Personal</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about-us') }}" class="{{ Route::is('about-us') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('resume') }}" class="{{ Route::is('resume') ? 'active' : '' }}">Resume</a></li>
            {{-- <li><a href="{{ route('services') }}" class="{{ Route::is('services') ? 'active' : '' }}">Services</a></li> --}}
            <li><a href="{{ route('portfolio') }}" class="{{ Route::is('portfolio') ? 'active' : '' }}">Projects</a></li>
            <li><a href="{{ route('contact-us') }}" class="{{ Route::is('contact-us') ? 'active' : '' }}">Contact</a></li>
          </ul>
          
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>