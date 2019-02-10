<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $role_viewer = Role::where('name', 'viewer')->first();
      $role_admin = Role::where('name', 'admin')->first();

      $viewer = new User();
      $viewer -> name = 'carina';
      $viewer -> email = 'carina@gmail.com';
      $viewer -> password = bcrypt('carina');
      $viewer -> save();
      $viewer -> roles() -> attach($role_viewer);

      $admin = new User();
      $admin -> name = 'Wouter Bosch';
      $admin -> email = 'wfcbosch@gmail.com';
      $admin -> password = bcrypt('wouter');
      $admin -> save();
      $admin -> roles() -> attach($role_admin);

      $admin = new User();
      $admin -> name = 'wouter2';
      $admin -> email = 'wouter2@gmail.com';
      $admin -> password = bcrypt('wouter');
      $admin -> save();
      $admin -> roles() -> attach($role_admin);

      $viewer = new User();
      $viewer -> name = 'carina2';
      $viewer -> email = 'carina2@gmail.com';
      $viewer -> password = bcrypt('carina');
      $viewer -> save();
      $viewer -> roles() -> attach($role_viewer);
    }
}
