<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'email' => 'admin@gmail.com',
            'role_id' => '1',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'email' => 'user@gmail.com',
            'role_id' => '2',
            'password' => Hash::make('12345678'),
        ]);
    }
}
