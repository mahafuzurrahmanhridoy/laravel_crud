<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'title' => 'Mobile'
            ],
            [
                'id' => 2,
                'title' => 'Laptop'
            ],
            [
                'id' => 3,
                'title' => 'Camera'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
