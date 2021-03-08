<?php namespace Gadimlie\Medias\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMediasTable extends Migration
{
    public function up()
    {
        Schema::create('gadimlie_medias_medias', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('title')->nullable();
            $table->text('section')->nullable();
            $table->text('type')->nullable();
            $table->text('photos')->nullable();
            $table->text('videos')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimlie_medias_medias');
    }
}
