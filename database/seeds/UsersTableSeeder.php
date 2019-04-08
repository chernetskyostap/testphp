<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'name' => Str::random(6),
                'email' => Str::random(10) . '@gmail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => Str::random(6),
                'email' => Str::random(10) . '@gmail.com',
                'password' => bcrypt('password'),
            ]
        ]);
    }
}
