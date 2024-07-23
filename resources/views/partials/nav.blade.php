<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/" style="display: flex; align-items: center;">
            <div style="background-color: #000000; padding: 5px; border-radius: 5px;">
                <img src="{{ asset('images/only logo.png') }}" alt="ONLYOU Elgeyo Logo"
                    style="height: auto; max-height: 50px;">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="/"
                        class="nav-link">Home</a></li>
                <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href="/about"
                        class="nav-link">About</a></li>
                <li class="nav-item {{ request()->is('agent') ? 'active' : '' }}"><a href="/agent"
                        class="nav-link">Agent</a></li>
                <li class="nav-item {{ request()->is('services') ? 'active' : '' }}"><a href="/services"
                        class="nav-link">Amenities</a></li>
                <li class="nav-item dropdown {{ request()->is('properties*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="/properties" id="propertiesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Properties</a>
                    <div class="dropdown-menu" aria-labelledby="propertiesDropdown">
                        <a class="dropdown-item" href="properties-single">Onlyou Elgeyo</a>
                        <a class="dropdown-item" href="#">Property 2</a>
                        <a class="dropdown-item" href="#">Property 3</a>
                        <a class="dropdown-item" href="#">Property 4</a>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('blog') ? 'active' : '' }}"><a href="/blog"
                        class="nav-link">Blog</a></li>
                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href="/contact"
                        class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
