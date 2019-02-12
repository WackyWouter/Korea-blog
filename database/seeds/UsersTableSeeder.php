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

      $admin = new User();
      $admin -> name = 'wouter';
      $admin -> email = 'wouter@gmail.com';
      $admin -> password = bcrypt('wouter');
      $admin -> save();
      $admin -> roles() -> attach($role_admin);

    }
}
