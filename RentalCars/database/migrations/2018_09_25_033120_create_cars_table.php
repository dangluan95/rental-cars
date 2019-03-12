<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manufacter_id')->unsigned();
            $table->integer('number_of_seat_id')->unsigned();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('image');
            $table->integer('price');
            $table->string('description');
            $table->foreign('manufacter_id')
                ->references('id')
                ->on('manufacters')
                ->onDelete('cascade');
            $table->foreign('number_of_seat_id')
                ->references('id')
                ->on('seats')
                ->onDelete('cascade');
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
        Schema::dropIfExists('cars');
    }
}
