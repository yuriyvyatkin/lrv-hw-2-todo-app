<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('todos')->insert([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph(),
                'created_at'  => $faker->dateTimeThisYear('now'),
            ]);
        }
    }
}
