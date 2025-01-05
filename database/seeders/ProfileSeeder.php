<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        Profile::create([
            'name' => 'Hani Ramadani',
            'nim' => 'SSI202303775',
            'class' => 'C3.4 Sistem Informasi',
            'univ' => 'Sekolah Tinggi Ilmu Komputer Widya Utama 2023/2024',
            'email' => 'u.honeyy444@gmail.com',
            'photo' => 'https://cdn1-production-images-kly.akamaized.net/sHFecpvaGr6uyFhqgz-qSb4RF20=/1200x675/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/5013120/original/021100800_1732072838-tips-fashion.jpg',
        ]);
    }
}
