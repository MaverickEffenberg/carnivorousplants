<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('reviews')->insert([
            [
                'user_id' => 1, 'plant_id' => 1, 'rate' => 5,
                'message' => 'Monstera-nya sehat banget dan daunnya lebar. Pengiriman juga cepat!',
                'created_at' => $now->copy()->subDays(2), 'updated_at' => $now->copy()->subDays(2),
            ],
            [
                'user_id' => 2, 'plant_id' => 2, 'rate' => 4,
                'message' => 'Sansevieria-nya tahan banget walau jarang disiram. Mantap!',
                'created_at' => $now->copy()->subDays(1), 'updated_at' => $now->copy()->subDays(1),
            ],
            [
                'user_id' => 3, 'plant_id' => 3, 'rate' => 5,
                'message' => 'Kaktusnya lucu banget, ukurannya pas buat di meja.',
                'created_at' => $now->copy()->subHours(5), 'updated_at' => $now->copy()->subHours(5),
            ],
            [
                'user_id' => 4, 'plant_id' => 4, 'rate' => 4,
                'message' => 'Sirih Gading-nya tumbuh cepat banget setelah seminggu! Love it!',
                'created_at' => $now->copy()->subHours(8), 'updated_at' => $now->copy()->subHours(8),
            ],
            [
                'user_id' => 5, 'plant_id' => 5, 'rate' => 5,
                'message' => 'Aglonema Red Sumatra-nya indah banget! Warna merahnya mencolok!',
                'created_at' => $now->copy()->subDays(3), 'updated_at' => $now->copy()->subDays(3),
            ],
        ]);
    }
}
