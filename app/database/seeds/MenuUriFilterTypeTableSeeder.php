<?php

class MenuUriFilterTypeTableSeeder extends Seeder {

    public function run()
    {
        // Refresh user groups
$sql = <<<'EOL'
SET FOREIGN_KEY_CHECKS=0;
TRUNCATE menu_filter_uri_types;
SET FOREIGN_KEY_CHECKS=1;
EOL;

        DB::unprepared($sql);

        // Assign administrator user to admin group
        try {
                    DB::table('menu_filter_uri_types')->insert(array(
                        array('filter' => 'exclude', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
                        array('filter' => 'include', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
                    ));
        } catch (Exception $e) {
            // If we need to stop it, then we could just throw it
            // throw $e;
        }
    }

}
