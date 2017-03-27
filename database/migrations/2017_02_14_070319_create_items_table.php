<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->nullable();
            $table->integer('exam_id')->nullable();
            $table->string('name', 150);
            $table->string('description')->nullable();
            $table->integer('price');
            $table->integer('expire_time')->nullable();
            $table->tinyInteger('type')->default(\App\Models\Item::TYPE_COMMON);
            $table->tinyInteger('level')->default(\App\Models\Item::LEVEL_NORMAL);
            $table->text('content')->nullable();
            $table->double('discount')->default(0);
            $table->integer('sold_count')->default(0);
            $table->text('image')->nullable();
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
        Schema::dropIfExists('items');
    }
}
