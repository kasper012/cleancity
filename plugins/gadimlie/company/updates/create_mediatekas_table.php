<?php namespace Gadimlie\Company\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMediatekasTable extends Migration
{
    public function up()
    {
        Schema::create('gadimlie_company_mediatekas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('gallery')->nullable();
            $table->text('video')->nullable();
            $table->text('type')->nullable();
            $table->text('section')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimlie_company_mediatekas');
    }
}
