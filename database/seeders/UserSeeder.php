<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users  = [
            [
                "firstname" => 'Admin',
                "lastname"  => 'Admin',
                "email"     => 'admin@admin.com',
                "password"  => 'password',
                "role"      => 'admin'
            ],
            [
                "firstname" => 'Blogger 1',
                "lastname"  => 'Blogger 1',
                "email"     => 'blogger1@blogger1.com',
                "password"  => 'password',
                "role"      => 'blogger'
            ]
        ];

        DB::table('users')->insert($users);
    }
}
