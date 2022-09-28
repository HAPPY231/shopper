<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $categories = [
                [
                    'name'=>'Electronics',
                    'parent_id'=>NULL,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'Accessories',
                    'parent_id'=>NULL,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'Smartphones',
                    'parent_id'=>'1',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'Speakers',
                    'parent_id'=>'1',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'Samsung',
                    'parent_id'=>'3',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'Huawei',
                    'parent_id'=>'3',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'Iphone',
                    'parent_id'=>'3',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'A22',
                    'parent_id'=>'5',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'name'=>'To phone',
                    'parent_id'=>'2',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
            ];

        Categories::insert($categories);

    }
}
