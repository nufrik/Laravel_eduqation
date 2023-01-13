<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserRoleSeeder extends Seeder
{

    public function run()
    {
        DB::table('user_role')->insert([
            [
                'user_id' => rand(1,10),
                'role_id' => rand(1,3),
            ],
            [
                'user_id' => rand(1,10),
                'role_id' => rand(1,3),
            ],
            [
                'user_id' => rand(1,10),
                'role_id' => rand(1,3),
            ],
            [
                'user_id' => rand(1,10),
                'role_id' => rand(1,3),
            ],
            [
                'user_id' => rand(1,10),
                'role_id' => rand(1,3),
            ],
            [
                'user_id' => rand(1,10),
                'role_id' => rand(1,3),
            ],
            [
                'user_id' => rand(1,10),
                'role_id' => rand(1,3),
            ],
            [
                'user_id' => rand(1,10),
                'role_id' => rand(1,3),
            ],
            [
                'user_id' => rand(1,10),
                'role_id' => rand(1,3),
            ],
            [
                'user_id' => rand(1,10),
                'role_id' => rand(1,3),
            ],
        ]);
    }
}
