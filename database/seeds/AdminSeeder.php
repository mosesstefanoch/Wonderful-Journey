<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            'email' => 'admin@admin.com',
            'role' => 'Admin',
            'name' => 'Admin',
            'password' => Hash::make('admin'),
        ]);

        DB::table('users')->insert(
        [
            'email' => 'user1@user.com',
            'role' => 'User',
            'name' => 'user1',
            'password' => Hash::make('user1'),
        ]);
        
        DB::table('users')->insert(
        [
            'email' => 'user2@user.com',
            'role' => 'User',
            'name' => 'user2',
            'password' => Hash::make('user2'),
        ]);
    }
}
