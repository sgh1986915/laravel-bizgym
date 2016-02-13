<?php
$current_depth = 0;
?>
@if(!empty($user_menu_items))
    @foreach($user_menu_items as $key => $value)
        @if (isset($user_menu_items[$key+1]) && $user_menu_items[$key+1]->depth > $current_depth)
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
@else
    <li>
        <a href="{{ URL::route('user.getprofile')}}">
            <i class='icon-user'></i>
            Your Profile
        </a>
    </li>
    <li>
        <a href='#'>
            <i class='icon-comment-alt'></i>
            Invite a Friend
        </a>
    </li>
    <li>
        <a href='#'>
            <i class='icon-cog'></i>
            Settings
        </a>
    </li>
    <li class='divider'></li>
    <li>
        <a href="{{ URL::route('auth_logout') }}">
            <i class='icon-signout'></i>
            Logout
        </a>
    </li>
@endif