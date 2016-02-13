<?php

class MenuItemTableDefaultMenuSeeder extends Seeder {

    public function run()
    {
        // Refresh user groups
$sql = <<<'EOL'
SET FOREIGN_KEY_CHECKS=0;
TRUNCATE menu_items;
SET FOREIGN_KEY_CHECKS=1;
EOL;

        DB::unprepared($sql);

        // Assign administrator user to admin group
        try {
            $location = DB::table('menu_locations')->where('slug', '=', 'header')->first();
            if(!empty($location))
            {
                $user_menu = DB::table('menus')
                    ->where('title', '=', 'User')
                    ->where('location_id', '=', $location->id)
                    ->first();

                $menu_type_link = DB::table('menu_item_types')
                    ->where('title', '=', 'link')
                    ->first();

                $menu_type_sep = DB::table('menu_item_types')
                    ->where('title', '=', 'separator')
                    ->first();

                if(!empty($user_menu))
                {
                    // Your Profile
                    $menu_icon = DB::table('menu_icons')
                        ->where('title', '=', 'icon-user')
                        ->first();

                    Menu::getMenuProvider()->getMenuItemModelProvider()->addItemToTree(array(
                        'menu_id' => $user_menu->id,
                        'title' => 'Your Profile',
                        'type_id' => $menu_type_link->id,
                        'url' => '/user/profile',
                        'icon_id' => empty($menu_icon->id) ? null : $menu_icon->id,
                    ), null);

                    // Invite a Friend
                    $menu_icon = DB::table('menu_icons')
                        ->where('title', '=', 'icon-comment-alt')
                        ->first();

                    Menu::getMenuProvider()->getMenuItemModelProvider()->addItemToTree(array(
                        'menu_id' => $user_menu->id,
                        'title' => 'Invite a Friend',
                        'type_id' => $menu_type_link->id,
                        'url' => '/user/invite',
                        'icon_id' => empty($menu_icon->id) ? null : $menu_icon->id,
                    ), null);

                    // Settings
                    $menu_icon = DB::table('menu_icons')
                        ->where('title', '=', 'icon-cog')
                        ->first();

                    Menu::getMenuProvider()->getMenuItemModelProvider()->addItemToTree(array(
                        'menu_id' => $user_menu->id,
                        'title' => 'Settings',
                        'type_id' => $menu_type_link->id,
                        'url' => '/user/settings',
                        'icon_id' => empty($menu_icon->id) ? null : $menu_icon->id,
                    ), null);

                    // Seperator
                    Menu::getMenuProvider()->getMenuItemModelProvider()->addItemToTree(array(
                        'menu_id' => $user_menu->id,
                        'title' => 'separator',
                        'type_id' => $menu_type_sep->id,
                        'url' => '#',
                    ), null);

                    // Logout
                    $menu_icon = DB::table('menu_icons')
                        ->where('title', '=', 'icon-signout')
                        ->first();

                    Menu::getMenuProvider()->getMenuItemModelProvider()->addItemToTree(array(
                        'menu_id' => $user_menu->id,
                        'title' => 'Logout',
                        'type_id' => $menu_type_link->id,
                        'url' => '/auth/logout',
                        'icon_id' => empty($menu_icon->id) ? null : $menu_icon->id,
                    ), null);

                }

                $guest_menu = DB::table('menus')
                    ->where('title', '=', 'Guest')
                    ->where('location_id', '=', $location->id)
                    ->first();

                if(!empty($guest_menu))
                {
                    // Login
                    $menu_icon = DB::table('menu_icons')
                        ->where('title', '=', 'icon-signin')
                        ->first();

                    Menu::getMenuProvider()->getMenuItemModelProvider()->addItemToTree(array(
                        'menu_id' => $guest_menu->id,
                        'title' => 'Login',
                        'type_id' => $menu_type_link->id,
                        'url' => '/auth/login',
                        'icon_id' => empty($menu_icon->id) ? null : $menu_icon->id,
                    ), null);

                }
            }

            $location = DB::table('menu_locations')->where('slug', '=', 'left-sidebar')->first();
            if(!empty($location))
            {

                $admin_config_menu = DB::table('menus')
                    ->where('title', '=', 'Configuration')
                    ->where('location_id', '=', $location->id)
                    ->first();

                $menu_type_link = DB::table('menu_item_types')
                    ->where('title', '=', 'link')
                    ->first();

                if(!empty($admin_config_menu))
                {
                    $menu_icon = DB::table('menu_icons')
                        ->where('title', '=', 'icon-sitemap')
                        ->first();

                    Menu::getMenuProvider()->getMenuItemModelProvider()->addItemToTree(array(
                        'menu_id' => $admin_config_menu->id,
                        'title' => 'Menu Items',
                        'type_id' => $menu_type_link->id,
                        'url' => '/admin/menu',
                        'icon_id' => empty($menu_icon->id) ? null : $menu_icon->id,
                    ), null);

                }

            }

        } catch (Exception $e) {
            var_dump($e);
        }
    }

}
