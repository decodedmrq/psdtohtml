<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_devices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->tinyInteger('type')->unique();
            $table->string('token', 120)->nullable();
            $table->string('location', 30)->nullable();
            $table->string('ip', 45)->nullable();
            $table->string('email', 120)->nullable();
            $table->string('version', 100)->nullable();
            $table->string('model', 30)->nullable();
            $table->string('product', 30)->nullable();
            $table->string('telcom', 30)->nullable();
            $table->text('installed_packages')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_devices');
    }
}
