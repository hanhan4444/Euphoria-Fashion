<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Collection;

class CollectionSeeder extends Seeder
{
    public function run()
    {
        Collection::create([
            'name' => 'Stylish Outfit',
            'photo' => 'https://bisnismuda.id/assets/content/2024040217172600000024919.jpg',
            'description' => 'Perfect blend of comfort and style.',
        ]);

        Collection::create([
            'name' => 'Elegant Dress',
            'photo' => 'https://img.lazcdn.com/g/p/856f9149b958bdc2bc9e7f8fbc8286e7.jpg_720x720q80.jpg',
            'description' => 'Feel confident in every moment.',
        ]);

        Collection::create([
            'name' => 'Casual Wear',
            'photo' => 'https://www.thefashionisto.com/wp-content/uploads/2023/07/Casual-Wear-Men.jpg',
            'description' => 'For your everyday adventures.',
        ]);
    }
}
