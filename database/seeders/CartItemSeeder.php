<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CartItemSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('cart_items')->insert([
            [
                'user_id' => 1,
                'plant_id' => 1,
                'quantity' => 2,
                'notes' => 'Tanaman ini cocok untuk area terang tapi tidak langsung kena matahari.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'plant_id' => 5,
                'quantity' => 1,
                'notes' => 'Tolong dibungkus rapi, untuk hadiah.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'plant_id' => 3,
                'quantity' => 3,
                'notes' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'plant_id' => 2,
                'quantity' => 1,
                'notes' => 'Tambahkan pot tanah liat kecil.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
