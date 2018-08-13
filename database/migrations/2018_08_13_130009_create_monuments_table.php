<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monuments', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->mediumText('short');
            $table->text('full');
            $table->string('location');
            $table->integer('city_id');
            $table->string('vrtour');

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
        Schema::dropIfExists('monuments');
    }
}
