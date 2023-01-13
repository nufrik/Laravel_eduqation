<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{

    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'Menger',
            ],
            [
                'name' => 'Programmer',
            ],
            [
                'name' => 'Driver',
            ],
        ]);
    }
}
