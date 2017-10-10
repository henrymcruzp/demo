<?php

use App\User;
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
        User::create(array(
            'name' => 'admin',
            'email'=>'m@cladian.com',
            'user_name'=>'admin',
            'password'=>'1234567890',
            'is_admin'=>1,

        ));
    }
}
