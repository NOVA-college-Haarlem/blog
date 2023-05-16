<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title'   => "mijn eerste bericht",
                "summary" => "Een samenvatting",
                "content" => "Laravel leren is leuk en interessant",
                "user_id" => 2
            ],
            [
                'title'   => "mijn tweede bericht",
                "summary" => "Een samenvatting over van alles",
                "content" => "Ik houd van Sushi en naar het strand gaan",
                "user_id" => 2
            ],
        ];
        DB::table("posts")->insert($posts);
    }
}
