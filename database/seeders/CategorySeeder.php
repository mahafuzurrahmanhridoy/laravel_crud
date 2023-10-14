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
                'slug' => 'mobile',
                'title' => 'Mobile'
            ],
            [
                'id' => 2,
                'slug' => 'laptop',
                'title' => 'Laptop'
            ],
            [
                'id' => 3,
                'slug' => 'camera',
                'title' => 'Camera'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
