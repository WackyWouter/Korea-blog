<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert(
        [
          [
            'title' => 'Test Titel 1',
            'slug' => 'test-titel-1',
            'intro' => 'Dit is een test artikel om te kijken of de seeders werken. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus ullamcorper dapibus. Aliquam vel ligula nisi. Mauris posuere velit in nulla venenatis imperdiet. Proin eu urna et odio elementum rutrum quis consequat ante. Suspendisse dui augue, rutrum quis tempus quis, tempus ac mi. Etiam et rutrum leo. Nam blandit mi sit amet ex convallis, vitae lacinia diam tincidunt. Integer aliquam nulla lobortis mi cursus, vel feugiat diam dignissim. Maecenas efficitur metus id nibh efficitur, ac iaculis ipsum egestas. Integer vestibulum tortor sollicitudin, consectetur nulla non, tincidunt lorem.',
            'text'  => 'Dit is een test artikel om te kijken of de seeders werken. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus ullamcorper dapibus. Aliquam vel ligula nisi. Mauris posuere velit in nulla venenatis imperdiet. Proin eu urna et odio elementum rutrum quis consequat ante. Suspendisse dui augue, rutrum quis tempus quis, tempus ac mi. Etiam et rutrum leo. Nam blandit mi sit amet ex convallis, vitae lacinia diam tincidunt. Integer aliquam nulla lobortis mi cursus, vel feugiat diam dignissim. Maecenas efficitur metus id nibh efficitur, ac iaculis ipsum egestas. Integer vestibulum tortor sollicitudin, consectetur nulla non, tincidunt lorem. Dit is een test artikel om te kijken of de seeders werken. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus ullamcorper dapibus. Aliquam vel ligula nisi. Mauris posuere velit in nulla venenatis imperdiet. Proin eu urna et odio elementum rutrum quis consequat ante. Suspendisse dui augue, rutrum quis tempus quis, tempus ac mi. Etiam et rutrum leo. Nam blandit mi sit amet ex convallis, vitae lacinia diam tincidunt. Integer aliquam nulla lobortis mi cursus, vel feugiat diam dignissim. Maecenas efficitur metus id nibh efficitur, ac iaculis ipsum egestas. Integer vestibulum tortor sollicitudin, consectetur nulla non, tincidunt lorem.',
            'user_id' => 2,
          ],
          [
            'title' => 'Test Titel 2',
            'slug' => 'test-titel-2',
            'intro' => 'Dit is een test artikel om te kijken of de seeders werken. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus ullamcorper dapibus. Aliquam vel ligula nisi. Mauris posuere velit in nulla venenatis imperdiet. Proin eu urna et odio elementum rutrum quis consequat ante. Suspendisse dui augue, rutrum quis tempus quis, tempus ac mi. Etiam et rutrum leo. Nam blandit mi sit amet ex convallis, vitae lacinia diam tincidunt. Integer aliquam nulla lobortis mi cursus, vel feugiat diam dignissim. Maecenas efficitur metus id nibh efficitur, ac iaculis ipsum egestas. Integer vestibulum tortor sollicitudin, consectetur nulla non, tincidunt lorem.',
            'text'  => 'Dit is een test artikel om te kijken of de seeders werken. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus ullamcorper dapibus. Aliquam vel ligula nisi. Mauris posuere velit in nulla venenatis imperdiet. Proin eu urna et odio elementum rutrum quis consequat ante. Suspendisse dui augue, rutrum quis tempus quis, tempus ac mi. Etiam et rutrum leo. Nam blandit mi sit amet ex convallis, vitae lacinia diam tincidunt. Integer aliquam nulla lobortis mi cursus, vel feugiat diam dignissim. Maecenas efficitur metus id nibh efficitur, ac iaculis ipsum egestas. Integer vestibulum tortor sollicitudin, consectetur nulla non, tincidunt lorem. Dit is een test artikel om te kijken of de seeders werken. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus ullamcorper dapibus. Aliquam vel ligula nisi. Mauris posuere velit in nulla venenatis imperdiet. Proin eu urna et odio elementum rutrum quis consequat ante. Suspendisse dui augue, rutrum quis tempus quis, tempus ac mi. Etiam et rutrum leo. Nam blandit mi sit amet ex convallis, vitae lacinia diam tincidunt. Integer aliquam nulla lobortis mi cursus, vel feugiat diam dignissim. Maecenas efficitur metus id nibh efficitur, ac iaculis ipsum egestas. Integer vestibulum tortor sollicitudin, consectetur nulla non, tincidunt lorem.',
            'user_id' => 2,
          ],
          [
            'title' => 'Test Titel 3',
            'slug' => 'test-titel-3',
            'intro' => 'Dit is een test artikel om te kijken of de seeders werken. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus ullamcorper dapibus. Aliquam vel ligula nisi. Mauris posuere velit in nulla venenatis imperdiet. Proin eu urna et odio elementum rutrum quis consequat ante. Suspendisse dui augue, rutrum quis tempus quis, tempus ac mi. Etiam et rutrum leo. Nam blandit mi sit amet ex convallis, vitae lacinia diam tincidunt. Integer aliquam nulla lobortis mi cursus, vel feugiat diam dignissim. Maecenas efficitur metus id nibh efficitur, ac iaculis ipsum egestas. Integer vestibulum tortor sollicitudin, consectetur nulla non, tincidunt lorem.',
            'text'  => 'Dit is een test artikel om te kijken of de seeders werken. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus ullamcorper dapibus. Aliquam vel ligula nisi. Mauris posuere velit in nulla venenatis imperdiet. Proin eu urna et odio elementum rutrum quis consequat ante. Suspendisse dui augue, rutrum quis tempus quis, tempus ac mi. Etiam et rutrum leo. Nam blandit mi sit amet ex convallis, vitae lacinia diam tincidunt. Integer aliquam nulla lobortis mi cursus, vel feugiat diam dignissim. Maecenas efficitur metus id nibh efficitur, ac iaculis ipsum egestas. Integer vestibulum tortor sollicitudin, consectetur nulla non, tincidunt lorem. Dit is een test artikel om te kijken of de seeders werken. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus ullamcorper dapibus. Aliquam vel ligula nisi. Mauris posuere velit in nulla venenatis imperdiet. Proin eu urna et odio elementum rutrum quis consequat ante. Suspendisse dui augue, rutrum quis tempus quis, tempus ac mi. Etiam et rutrum leo. Nam blandit mi sit amet ex convallis, vitae lacinia diam tincidunt. Integer aliquam nulla lobortis mi cursus, vel feugiat diam dignissim. Maecenas efficitur metus id nibh efficitur, ac iaculis ipsum egestas. Integer vestibulum tortor sollicitudin, consectetur nulla non, tincidunt lorem.',
            'user_id' => 2,
          ],
        ]
      );
    }
}
