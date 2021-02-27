<?php namespace Gadimlie\Tenders\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTendersTable extends Migration
{
    public function up()
    {
        Schema::create('gadimlie_tenders_tenders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('title')->nullable();
            



            $table->text('date')->nullable();

            $table->text('query')->nullable();
            $table->text('text')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimlie_tenders_tenders');
    }
}
