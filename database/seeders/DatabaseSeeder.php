<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Demo',
            'email' => 'demo@gmail.com',
            'password' => Hash::make('demo'),
        ]);

        DB::table('users')->insert([
            'name' => 'DemoUser',
            'email' => 'demoUser@gmail.com',
            'password' => Hash::make('demoUser'),
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'slug' => 'admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
            'slug' => 'user',
        ]);

        DB::table('users_roles')->insert([
            'user_id' => 1,
            'role_id' => 1,
        ]);

        DB::table('users_roles')->insert([
            'user_id' => 2,
            'role_id' => 2,
        ]);

        DB::table('permissions')->insert([
            'name' => 'See all users',
            'slug' => 'see-all-users',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Rights management',
            'slug' => 'rights-management',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Add users to the ban',
            'slug' => 'add-users-to-the-ban',
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => 1,
            'permission_id' => 1,
        ]);
 
        DB::table('roles_permissions')->insert([
            'role_id' => 1,
            'permission_id' => 2,
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => 1,
            'permission_id' => 3,
        ]);

        DB::table('users_permissions')->insert([
            'user_id' => 1,
            'permission_id' => 1,
        ]);

        DB::table('users_permissions')->insert([
            'user_id' => 1,
            'permission_id' => 2,
        ]);

        DB::table('users_permissions')->insert([
            'user_id' => 1,
            'permission_id' => 3,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
