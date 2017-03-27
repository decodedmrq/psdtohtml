<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('item_id', 100)->nullable();
            $table->string('ref_code', 120)->unique()->nullable();
            $table->tinyInteger('payment_method')->nullable()->index();
            $table->string('card_pin', 100)->nullable();
            $table->string('card_serial', 100)->nullable();
            $table->string('provider', 50)->nullable();
            $table->text('payload')->nullable();
            $table->text('callback_payload')->nullable();
            $table->string('ip', 45)->nullable();
            $table->bigInteger('coin')->nullable();
            $table->bigInteger('discount')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->index(['ref_code', 'user_id']);
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
        Schema::dropIfExists('payment_logs');
    }
}
