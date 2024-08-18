<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('categories')->insert($this->getData());
    }

    public function getData(): array
    {
        $quantityCategories = 10;
        $categories = [];
        for ($i=0; $i < $quantityCategories; $i++) {
            $categories[] = [
                'title' => fake()->jobTitle(),
                'description' => "<strong>" . fake()->text(100) . "</strong>",
                'created_at' => now(),
            ];
        }
        return $categories;
    }
}
