<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run()
    {
        $tags = [

            [
                'name' => 'Collection',
                'slug' => 'collection',
                'status' => 1,
            ], [
                'name' => 'Sponsored',
                'slug' => 'sponsored',
                'status' => 1,
            ],
            [
                'name' => 'Featured',
                'slug' => 'featured',
                'status' => 1,
            ],
            [
                'name' => 'Home & Office Decor',
                'slug' => 'home-Office-decor',
                'status' => 1,
            ], [
                'name' => 'Furniture',
                'slug' => 'furniture',
                'status' => 1,
            ], [
                'name' => 'KitchenWare',
                'slug' => 'kitchenware',
                'status' => 1,
            ],
            [
                'name' => 'Gardening',
                'slug' => 'gardening',
                'status' => 1,
            ],

        ];
        Tag::insert($tags);
    }
}
