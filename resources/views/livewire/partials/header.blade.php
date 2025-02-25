<header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-lg-between">
          <div class="contact-info d-none d-lg-flex align-items-center">
            <i style="font-size: 16px;" class="bi bi-envelope d-flex align-items-center">&nbsp;<span style="font-size: 14px;padding-top: 1px;">Email: presentwebsolution@gmail.com</span></i>
            <i style="font-size: 16px;" class="bi bi-phone d-flex align-items-center ms-4">&nbsp;<span style="font-size: 14px;padding-top: 1px;">Need Support: 01740006203</span></i>
          </div>
          <div class="social-links d-flex align-items-center">
            <a style="padding: 10px;" href="#" class="login"><i style="font-size: 15px;padding-right: 5px;font-weight:700;" class="bi bi-whatsapp"></i>WhatsApp Chat</a>
            <a style="border-left: 1px solid #ddd;padding: 10px;" href="#" class="login"><i style="font-size: 15px;padding-right: 5px;font-weight:700;" class="bi bi-skype"></i>Skype Chat</a>
            @if (Route::has('login'))
            @auth
            <div style="border-left: 1px solid #ddd;padding:7px;" class="accountdropdown">
              <a id="dropdownMenuLink" data-bs-toggle="accountdropdown" aria-expanded="false" href="#"><span><i style="font-size: 15px;padding-right: 5px;font-weight:700;" class="bi bi-person"></i>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @if(Auth::user()->type === 'admin')
                  <li style="padding: 5px 0px 5px 0px;border-bottom:1px solid #f2eeee;"><a style="color:#222222;font-size:15px;padding-right:10px;" wire:navigate href="{{ route('admin.dashboard') }}"><i style="font-size: 14px;" class="bi bi-house"></i>&nbsp;&nbsp;Dashboard</a></li>
                @else
                  <li style="padding: 5px 0px 5px 0px;border-bottom:1px solid #f2eeee;"><a style="color:#222222;font-size:15px;padding-right:10px;" wire:navigate href="{{ route('user.dashboard') }}"><i style="font-size: 14px;" class="bi bi-house"></i>&nbsp;&nbsp;Dashboard</a></li>
                @endif
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <li style="padding: 5px 0px 5px 0px;"><button class="btn btn-link" type="submit" style="color:#222222;font-size:15px;padding-right:10px;text-decoration:none;margin-left:10px;"><i style="font-size: 14px;" class="bi bi-power"></i>&nbsp;&nbsp;Logout</button></li>
                </form>
              </ul>
            </div>
            @else
              <a style="border-left: 1px solid #ddd;padding: 10px;" href="{{ route('login') }}" class="login" wire:navigate><i style="font-size: 15px;padding-right: 5px;font-weight:700;" class="bi bi-person"></i>My Account</a>
            @endauth
            @endif
          </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{asset('assets/img/present_web_soluation_logo.png')}}" alt="logo">
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a wire:navigate href="{{ route('home') }}" class="@if(Route::currentRouteName() =='home') active @endif">Home</a></li>
            <li class="dropdown">
              <a class="@if(Route::currentRouteName() == 'services') active @endif" href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a wire:navigate href="{{route('services')}}"><i style="font-size: 13px;" class="bi bi-globe"></i>&nbsp;&nbsp;Web Services</a></li>
                <li><a wire:navigate href="{{route('services')}}"><i style="font-size: 13px;" class="bi bi-megaphone"></i>&nbsp;&nbsp;Digital Marketing</a></li>
                <li><a wire:navigate href="{{route('services')}}"><i style="font-size: 13px;" class="bi bi-app"></i>&nbsp;&nbsp;Software</a></li>
                <li><a wire:navigate href="{{route('services')}}"><i style="font-size: 13px;" class="bi bi-brush"></i>&nbsp;&nbsp;Graphics</a></li>
                <li><a wire:navigate href="{{route('services')}}"><i style="font-size: 13px;" class="bi bi-link"></i>&nbsp;&nbsp;SEO Backlink</a></li>
                <li><a wire:navigate href="{{route('services')}}"><i style="font-size: 13px;" class="bi bi-search"></i>&nbsp;&nbsp;Onpage SEO</a></li>
                <li><a wire:navigate href="{{route('services')}}"><i style="font-size: 13px;" class="bi bi-search-heart"></i>&nbsp;&nbsp;Technical SEO</a></li>
              </ul>
            </li>
            <li><a class="@if(Route::currentRouteName() == 'about') active @endif" href="{{ route('about') }}" wire:navigate>About Us</a></li>
            <li><a class="@if(Route::currentRouteName() == 'portfolio') active @endif" href="{{ route('portfolio') }}" wire:navigate>Portfolio</a></li>
            <li><a class="@if(Route::currentRouteName() == 'team') active @endif" href="{{ route('team') }}" wire:navigate>Our Team</a></li>
            <li><a class="@if(Route::currentRouteName() == 'blog') active @endif" href="{{ route('blog') }} " wire:navigate>Blog</a></li>
            <li><a class="@if(Route::currentRouteName() == 'contact') active @endif" href="{{ route('contact') }}" wire:navigate>Contact</a></li>
            <li>
              <a type="button" id="searchButton" style="margin-left: 10px;"><i style="font-size: 20px;color:#106eea;" class="bi bi-search"></i></a>
            </li>
            <!--<li>
                <a style="padding: 7px;" href="#" class="position-relative">
                    <i style="font-size: 22px;font-weight: bold;" class="bi bi-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                    99+
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </a>
            </li>-->
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
    <div class="container" id="search_input">
      <div class="input-group search">
        <input type="search" class="form-control mb-3 mt-3" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <button type="button" class="btn btn-outline-primary mb-3 mt-3 register" data-mdb-ripple-init>search</button>
      </div>
    </div>
</header>
