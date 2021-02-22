<?php namespace Gadimlie\Company\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStoresTable extends Migration
{
    public function up()
    {
        Schema::create('gadimlie_company_stores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('work_time');
            $table->text('address');

            $table->string('phones');
            $table->string('emails');
            $table->string('link');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimlie_company_stores');
    }
}
