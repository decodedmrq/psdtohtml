<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 120)->unique()->nullable();
            $table->string('email', 120)->unique();
            $table->string('password', 100)->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('phone', 45)->nullable();
            $table->string('address')->nullable();
            $table->text('avatar')->nullable();
            $table->string('location', 30)->nullable();
            $table->integer('exp')->default(0);
            $table->integer('current_lesson_id')->nullable();
            $table->integer('learned_lesson_count')->default(0);
            $table->integer('coin')->default(0);
            $table->integer('coin_bonus')->default(0);
            $table->tinyInteger('type')->default(\App\Models\User::TYPE_FREE);
            $table->tinyInteger('role')->default(\App\Models\User::ROLE_MEMBER);
            $table->string('remember_token', 120)->nullable();
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
        Schema::dropIfExists('users');
    }
}
