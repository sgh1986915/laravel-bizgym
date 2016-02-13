<?php

class MenuLocationTableSeeder extends Seeder {

    public function run()
    {
        // Refresh user groups
$sql = <<<'EOL'
SET FOREIGN_KEY_CHECKS=0;
TRUNCATE menu_locations;
SET FOREIGN_KEY_CHECKS=1;
EOL;

        DB::unprepared($sql);

        // Assign administrator user to admin group
        try {
            DB::table('menu_locations')->insert(array(
                array('title' => 'Header', 'slug' => 'header', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
                array('title' => 'Left Sidebar', 'slug' => 'left-sidebar', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
                //array('title' => 'Footer', 'slug' => 'footer', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
            ));
        } catch (Exception $e) {
            // If we need to stop it, then we could just throw it
            // throw $e;
        }
    }

}
