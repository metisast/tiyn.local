<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $faker = Faker\Factory::create();
        for($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'title' => $faker->text(30),
                'description' => $faker->text(200),
                'count' => $faker->randomDigit(1)
            ]);
        }

        Model::reguard();
    }
}
