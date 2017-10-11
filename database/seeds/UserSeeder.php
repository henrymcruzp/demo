<?php

use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 100; $i++) {
            User::create(array(
                'name' => $faker->name,
                'email' => $faker->email,
                'user_name' => $faker->name,
                'password' => '1234567890'
            ));
        }
    }
}
