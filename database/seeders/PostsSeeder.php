<?php

namespace Database\Seeders;

use App\Enums\Posts\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('posts')->insert($this->getData());
    }

    public function getData(): array
    {
        $quantityPostss = 10;
        $posts = [];
        for ($i=0; $i < $quantityPostss; $i++) {
            $posts[] = [
                'category_id' => 1,
                'title' => fake()->jobTitle(),
                'author' => fake()->userName,
                'image' => fake()->imageUrl(200, 150),
                'status' => Status::ACTIVE,
                'description' => "<strong>" . fake()->text(100) . "</strong>",
                'created_at' => now(),
            ];
        }
        return $posts;
    }
}
