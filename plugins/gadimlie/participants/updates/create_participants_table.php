<?php namespace Gadimlie\Participants\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateParticipantsTable extends Migration
{
    public function up()
    {
        Schema::create('gadimlie_participants_participants', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('name')->nullable();
            
            $table->text('profile_img')->nullable();
            $table->text('images')->nullable();
            $table->text('video')->nullable();
            $table->text('video_title')->nullable();

            $table->text('year')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimlie_participants_participants');
    }
}
