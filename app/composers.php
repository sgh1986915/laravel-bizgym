<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nick
 * Date: 9/25/13
 * Time: 5:23 PM
 * To change this template use File | Settings | File Templates.
 */

/*
|
| Header Menu
|
*/
View::composer('layouts.partials.header.dashboard', function($view)
{
    //Menu::build(identifier, URI, Group list, format);
    $menus = Menu::build('header');

    $user_menu = array();

    foreach($menus as $menu)
    {
        if(strtolower($menu->title) == 'user' and Auth::check())
        {
            $user_menu = $menu->items;
            break;
        }

        if(strtolower($menu->title) == 'guest' and !Auth::check())
        {
            $user_menu = $menu->items;
            break;
        }
    }

    $view->with('header_menus', $user_menu);
});

/*
|
| Left Sidebar Menu
|
*/
View::composer(array(
    'layouts.partials.sidebar.dashboard',
    'layouts.partials.sidebar.admin',
), function($view)
{
    //Menu::build(identifier, URI, Group list, format);
    $menu = Menu::build('left-sidebar');

    $view->with('left_sidebar_menus', $menu);
});