<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'a',
            'email' => 'a@a.a',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'c',
            'email' => 'c@c.c',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'b',
            'email' => 'b@b.b',
            'password' => Hash::make('password'),
        ]);
    }
}
