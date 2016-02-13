<?php

class MenuIconsTableSeeder extends Seeder {

    public function run()
    {
        // Refresh user groups
$sql = <<<'EOL'
SET FOREIGN_KEY_CHECKS=0;
TRUNCATE menu_icons;
SET FOREIGN_KEY_CHECKS=1;
EOL;

        DB::unprepared($sql);

        try {
            foreach(FontAwesomeHelper::getIcons() as $icon) {
                    DB::table('menu_icons')->insert(array('title' => $icon['name']));
            }
        } catch (Exception $e) {
            var_dump($e);
        }
    }
}
