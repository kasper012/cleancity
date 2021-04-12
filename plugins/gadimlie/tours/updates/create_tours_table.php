<?php namespace Gadimlie\Tours\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateToursTable extends Migration
{
    public function up()
    {
        Schema::create('gadimlie_tours_tours', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('title')->nullable();
            
            $table->text('image')->nullable();
            $table->text('images')->nullable();

            $table->text('date_start')->nullable();
            $table->text('date_finish')->nullable();

            $table->text('youtube')->nullable();

            $table->text('description')->nullable();
            $table->text('excerpt')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimlie_tours_tours');
    }
}
