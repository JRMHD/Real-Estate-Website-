<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <div style="display: flex; align-items: center;">
            <a class="navbar-brand" href="/" style="display: flex; align-items: center; margin-right: 15px;">
                <div style="background-color: #000000; padding: 5px; border-radius: 5px;">
                    <img src="{{ asset('images/only logo.png') }}" alt="ONLYOU Elgeyo Logo"
                        style="height: auto; max-height: 50px;">
                </div>
            </a>
            <div id="navClock"
                style="font-family: 'Arial', sans-serif; background: linear-gradient(135deg, #f6d365 0%, #fda085 100%); padding: 5px 10px; border-radius: 5px; color: white; text-align: center;">
                <div class="clock-large" style="display: none;">
                    <div style="font-size: 10px; text-transform: uppercase; letter-spacing: 1px;" id="navLocation">Your
                        Location</div>
                    <div id="navTimeLarge" style="font-size: 16px; font-weight: bold;"></div>
                    <div id="navDateLarge" style="font-size: 10px;"></div>
                </div>
                <div class="clock-small" style="display: none;">
                    <div id="navTimeSmall" style="font-size: 14px; font-weight: bold;"></div>
                </div>
            </div>
        </div>
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

<script>
    function updateNavClock() {
        const now = new Date();
        const optionsDate = {
            weekday: 'short',
            year: 'numeric',
            month: 'short',
            day: 'numeric'
        };
        const optionsTime = {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        };

        const location = Intl.DateTimeFormat().resolvedOptions().timeZone.replace('_', ' ');

        document.getElementById('navDateLarge').textContent = now.toLocaleDateString('en-US', optionsDate);
        document.getElementById('navTimeLarge').textContent = now.toLocaleTimeString('en-US', optionsTime);
        document.getElementById('navTimeSmall').textContent = now.toLocaleTimeString('en-US', {
            hour: '2-digit',
            minute: '2-digit'
        });
        document.getElementById('navLocation').textContent = location;
    }

    function toggleClockVisibility() {
        const clockLarge = document.querySelector('.clock-large');
        const clockSmall = document.querySelector('.clock-small');

        if (window.innerWidth >= 992) { // lg breakpoint in Bootstrap
            clockLarge.style.display = 'block';
            clockSmall.style.display = 'none';
        } else {
            clockLarge.style.display = 'none';
            clockSmall.style.display = 'block';
        }
    }

    // Update clock every second
    setInterval(updateNavClock, 1000);
    updateNavClock(); // Initial call to display time immediately

    // Check on load and resize
    window.addEventListener('load', toggleClockVisibility);
    window.addEventListener('resize', toggleClockVisibility);
</script>
