<?php
    $current_depth = 0;
?>

<ul class='nav nav-stacked'>

@foreach($left_sidebar_menu_items as $key => $value)

    @if (isset($left_sidebar_menu_items[$key+1]) && $left_sidebar_menu_items[$key+1]->depth > $current_depth)
        <li class=''>
            <a class='dropdown-collapse' href="{{ $value->url }}">
                <i class='{{ $value->icon }}'></i>
                <span>{{ $value->title }}</span>
                <i class='icon-angle-down angle-down'></i>
            </a>
            <ul class='nav nav-stacked'>
        </li>
    @elseif ($value->depth < $current_depth)
            </ul>
        </li>
    @endif

    @if ($value->type_title == 'link')
        <li class=''>
            <a href="{{ $value->url }}">
                <i class='{{ $value->icon }}'></i>
                <span>{{ $value->title }}</span>
            </a>
        </li>
    @elseif ($value->type_title == 'separator')
        <li class="divider"></li>
    @elseif ($value->type_title == 'route')
        <li class=''>
            <a href="{{ \URL::route($value->url) }}">
                <i class='{{ $value->icon }}'></i>
                <span>{{ $value->title }}</span>
            </a>
        </li>
    @endif

@endforeach

</ul>