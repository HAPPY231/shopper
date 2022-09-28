<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
            'name' => "Kacper",
            'surname' => "Marszycki",
            'phone_number' => '534815884',
            'email' => 'marszycki056@gmail.com',
            'email_verified_at' => NULL,
            'password' => "$2y$10$7A2BQwemHooBKi3zpnFcHuC4j2mP2T6lKddEXWCf5EFm0O1DfNWrW", 'remember_token'=>'Ed7Afk0tC6TiLtew5PnVvngEKAQUKnBK30Kmr6wSYDVmgOnYiYjBoXKhLSwu',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $this->call(CategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ImagesSeeder::class);
    }
}
