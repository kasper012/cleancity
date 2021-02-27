<?php namespace Gadimlie\Photos\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePhotosTable extends Migration
{
    public function up()
    {
        Schema::create('gadimlie_photos_photos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('date')->nullable();
            $table->text('photo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimlie_photos_photos');
    }
}
