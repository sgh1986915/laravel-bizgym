<header>
    <div class='navbar'>
        <div class='navbar-inner'>
            <div class='container-fluid'>
                <a class='brand' href='/'>
                    <i class='icon-globe'></i>
                    <span class='hidden-phone'>{{ Config::get('app.name') }}</span>
                </a>
                @yield('header_nav_content')
            </div>
        </div>
    </div>
</header>