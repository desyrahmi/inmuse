<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'administrator',
                'username' => 'administrator',
                'phone' => '-',
                'email' => 'admin@inmuse.com',
                'password' => Hash::make('admin'),
                'role' => 'admin'
            ]

        ]);
    }
}
