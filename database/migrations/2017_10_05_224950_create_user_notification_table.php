<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_notification', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status', ['entregado','error','espera'])->default('espera');    
            $table->timestamps();

            $table->softDeletes();

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('notification_id')->unsigned()->nullable();
             $table->foreign('notification_id')->references('id')->on('notifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_notification');
    }
}
