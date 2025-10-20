<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plant;

class PlantSeeder extends Seeder
{
    public function run()
    {
        $plants = [
            [
                'name' => 'Monstera Deliciosa',
                'description' => 'Tanaman tropis populer dengan daun besar dan berlubang alami.',
                'price' => 120000,
                'category' => 'TROPICAL',
                'isAvailable' => true,
                'image_url' => 'images/plants/monstera.png',
            ],
            [
                'name' => 'Sansevieria',
                'description' => 'Juga dikenal sebagai lidah mertua, tahan lama dan cocok untuk ruangan minim cahaya.',
                'price' => 80000,
                'category' => 'SUCCULENT',
                'isAvailable' => true,
                'image_url' => 'images/plants/sansevieria.png',
            ],
            [
                'name' => 'Kaktus Mini',
                'description' => 'Kaktus mungil yang mudah dirawat dan cocok untuk meja kerja.',
                'price' => 35000,
                'category' => 'SUCCULENT',
                'isAvailable' => true,
                'image_url' => 'images/plants/cactus-mini.png',
            ],
            [
                'name' => 'Sirih Gading',
                'description' => 'Tanaman rambat dengan daun hijau kekuningan, tumbuh cepat di air maupun tanah.',
                'price' => 45000,
                'category' => 'TROPICAL',
                'isAvailable' => true,
                'image_url' => 'images/plants/sirih-gading.png',
            ],
            [
                'name' => 'Aglonema Red Sumatra',
                'description' => 'Aglonema dengan warna merah menyala dan daun mengkilap.',
                'price' => 95000,
                'category' => 'RARE',
                'isAvailable' => true,
                'image_url' => 'images/plants/aglonema-red-sumatra.png',
            ],
            [
                'name' => 'Nepenthes Alata',
                'description' => 'Tanaman karnivora unik yang memerangkap serangga di dalam kantungnya.',
                'price' => 150000,
                'category' => 'CARNIVOROUS',
                'isAvailable' => true,
                'image_url' => 'images/plants/nepenthes-alata.png',
            ],
        ];

        foreach ($plants as $plant) {
            Plant::create($plant);
        }
    }
}
