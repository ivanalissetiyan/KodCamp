<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camps;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps1 = [
            [
                'title' => 'Full Belajar',
                'slug' => 'full-belajar',
                'price' => 380,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => 180,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        // foreach ($camps1 as $key => $camps) {
        //     Camps::create($camps);
        // }
        Camps::insert($camps1);
    }
}
