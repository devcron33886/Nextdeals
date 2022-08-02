<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Women’s Gifts',
                'slug' => 'women-s-gifts',
                'status' => 1,
            ], [
                'name' => 'Mens’s Gifts',
                'slug' => 'men-s-gifts',
                'status' => 1,
            ], [
                'name' => 'Wedding Gifts',
                'slug' => 'wedding-gifts',
                'status' => 1,
            ],

        ];

        Category::insert($categories);
    }
}
