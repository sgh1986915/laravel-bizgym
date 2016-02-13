<nav class='' id='main-nav'>
    <div class='navigation'>
        <div class='search'>
            <form accept-charset="UTF-8" action="search_results.html" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
                <div class='search-wrapper'>
                    <input autocomplete="off" class="search-query" id="q" name="q" placeholder="Search..." type="text" value="" />
                    <button class="btn btn-link icon-search" name="button" type="submit"></button>
                </div>
            </form>
        </div>
        <ul class='nav nav-stacked'>
            <li class=''>
                <a href="{{ AdminURL::route('index') }}">
                    <i class='icon-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @if(!empty($left_sidebar_menus))
                @include('layouts.partials.sidebar.dashboard.menu', array('left_sidebar_menus' => $left_sidebar_menus))
            @endif
            {{ AdminMenu::prepareSidebar()->render() }}
        </ul><!--/.main-nav-->
    </div>
</nav>