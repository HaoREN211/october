<?php namespace Hao\SocialNetwork\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMeeticsTable extends Migration
{
    public function up()
    {
        Schema::create('hao_socialnetwork_meetics', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('url', 200)->nullable;
            $table->string('name', 100);
            $table->integer('age')->nullable;
            $table->integer('birthday')->nullable;
            $table->integer('height')->nullable;
            $table->integer('weight')->nullable;
            $table->unsignedInteger('fk_location')->nullable;
            $table->foreign('fk_location')
                ->references('id')
                ->on('hao_socialnetwork_meetic_locations')
                ->onDelete('cascade');
            $table->string('imperfection', 50)->nullable;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hao_socialnetwork_meetics');
    }
}
