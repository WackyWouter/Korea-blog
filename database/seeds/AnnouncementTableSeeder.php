<?php

use Illuminate\Database\Seeder;

class AnnouncementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('announcement')->insert(
          [
            'text' => 'Geen mededelingen',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
          ]
        );
    }
}
