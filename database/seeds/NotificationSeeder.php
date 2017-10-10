<?php

use App\Notification;
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
       Notification::create(array(
           'title' => 'hola',
           'message'=>'alksjdlksajd',
           'user_id'=>1

       ));

    }
}
