<?php namespace Gadimlie\Residents\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateResidentsTable extends Migration
{
    public function up()
    {
        Schema::create('gadimlie_residents_residents', function (Blueprint $table) {
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
        Schema::dropIfExists('gadimlie_residents_residents');
    }
}
