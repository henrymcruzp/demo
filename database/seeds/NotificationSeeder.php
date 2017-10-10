<?php

use App\Notification;
use Faker\Factory;
use Illuminate\Database\Seeder;


class NotificationSeeder extends Seeder
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
//            echo $faker->title, "\n"; (imprimir progreso en terminal)


            Notification::create(array(

                'title' => $faker->text,
                'message' => $faker->text,
                'user_id' => 1

            ));
        }
    }
}
