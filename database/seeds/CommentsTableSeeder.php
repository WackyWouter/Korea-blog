<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('comments')->insert(
        [
          [
            'user_id' => 2,
            'post_id' => 1,
            'text' => 'Zo gaaf',
          ],
          [
            'user_id' => 1,
            'post_id' => 1,
            'text' => 'Wat leuk',
          ],
          [
            'user_id' => 1,
            'post_id' => 1,
            'text' => 'Heb je het naar je zin?',
          ],
          [
            'user_id' => 2,
            'post_id' => 2,
            'text' => 'Zo gaaf',
          ],
          [
            'user_id' => 1,
            'post_id' => 2,
            'text' => 'Wat leuk',
          ],
          [
            'user_id' => 2,
            'post_id' => 2,
            'text' => 'Heb je het naar je zin?',
          ],
          [
            'user_id' => 1,
            'post_id' => 3,
            'text' => 'Zo gaaf',
          ],
          [
            'user_id' => 2,
            'post_id' => 3,
            'text' => 'Wat leuk',
          ],
          [
            'user_id' => 1,
            'post_id' => 3,
            'text' => 'Heb je het naar je zin?',
          ],
        ]
      );
    }
}
