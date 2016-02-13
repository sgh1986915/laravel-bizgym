@foreach($left_sidebar_menus as $menu)
<li class=''>
    @if(!isset($menu->items) or empty($menu->items))
    <a href='#' class='in'>
        <i class='{{ $menu->icon }}'></i>
        <span>{{ $menu->title }}</span>
    </a>
    @else
    <a class='dropdown-collapse' href='#'>
        <i class='{{ $menu->icon }}'></i>
        <span>{{ $menu->title }}</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
        @include('layouts.partials.sidebar.dashboard.items', array('left_sidebar_menu_items' => $menu->items))
    @endif
</li>
@endforeach
