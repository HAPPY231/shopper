<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Images;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'product_id' => '3',
                'url' => '85903834059535',
                'position' => '1',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => '3',
                'url' => '85903834059536',
                'position' => '2',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => '3',
                'url' => '85903834059537',
                'position' => '3',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
        ];

            Images::insert($images);

    }
}
