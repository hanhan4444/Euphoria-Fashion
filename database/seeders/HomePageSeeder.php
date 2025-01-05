<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomePage;

class HomePageSeeder extends Seeder
{
    public function run()
    {
        HomePage::create([
            'name' => env('APP_NAME'),
            'tagline' => 'Discover True Comfort in Fashion',
            'banner_photo_url' => 'https://audaces.com/wp-content/uploads/2020/08/fashion-styles.webp',
            'title_1' => 'Effortless Style Management',
            'description' => 'From curated collections to personalized styling, fashion enthusiasts around the world trust our platform to elevate their wardrobe experience with ease and confidence.',
            'cta_photo_url' => 'https://static.vecteezy.com/system/resources/thumbnails/034/028/820/small_2x/fashion-model-girl-in-beige-wear-png.png',
            'about_us' => 'Bagi kami, fashion bukan sekedar untuk memanjakan penglihatan, menjadikan pusat perhatian dan menjadi bahan perbincangan. Tapi fashion sepenuhnya tentang rasa nyaman yang membuat rasa percaya diri selalu tertanam dalam diri.',
        ]);
    }
}
