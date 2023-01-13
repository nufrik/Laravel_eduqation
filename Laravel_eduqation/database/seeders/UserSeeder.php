<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'name1',
            ],
            [
                'name' => 'name2',
            ],
            [
                'name' => 'name3',
            ],
            [
                'name' => 'name4',
            ],
            [
                'name' => 'name5',
            ],
            [
                'name' => 'name6',
            ],
            [
                'name' => 'name7',
            ],
            [
                'name' => 'name8',
            ],
            [
                'name' => 'name9',
            ],
            [
                'name' => 'name10',
            ],
        ]);
    }
}
