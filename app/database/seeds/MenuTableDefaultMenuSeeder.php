<?php

class MenuTableDefaultMenuSeeder extends Seeder {

    public function run()
    {
        // Refresh user groups
$sql = <<<'EOL'
SET FOREIGN_KEY_CHECKS=0;
TRUNCATE menus;
SET FOREIGN_KEY_CHECKS=1;
EOL;

        DB::unprepared($sql);

        // Assign administrator user to admin group
        try {

            $menu_icon_user = DB::table('menu_icons')
                ->where('title', '=', 'icon-user')
                ->first();

            $menu_icon_cog = DB::table('menu_icons')
                ->where('title', '=', 'icon-cog')
                ->first();

            $location = DB::table('menu_locations')->where('slug', '=', 'header')->first();
            if(!empty($location))
            {
                //User!
                Menu::getMenuProvider()->getMenuModelProvider()->create(array(
                    'title' => 'User',
                    'location_id' => $location->id,
                    'priority' => 0,
                    'icon_id' => empty($menu_icon_user->id) ? null : $menu_icon_user->id,
                ));

                //Guest!
                Menu::getMenuProvider()->getMenuModelProvider()->create(array(
                    'title' => 'Guest',
                    'location_id' => $location->id,
                    'priority' => 1,
                    'icon_id' => empty($menu_icon_user->id) ? null : $menu_icon_user->id,
                ));
            }

            $location = DB::table('menu_locations')->where('slug', '=', 'left-sidebar')->first();
            if(!empty($location))
            {
                Menu::getMenuProvider()->getMenuModelProvider()->create(array(
                    'title' => 'Configuration',
                    'location_id' => $location->id,
                    'priority' => -10,
                    'icon_id' => empty($menu_icon_cog->id) ? null : $menu_icon_cog->id,
                ));
            }

        } catch (Exception $e) {
            var_dump($e);
        }
    }

}
