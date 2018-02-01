<?php namespace Hao\SocialNetwork\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMeeticLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('hao_socialnetwork_meetic_locations', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('city', 50)->nullable;
            $table->string('region', 50)->nullable;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hao_socialnetwork_meetic_locations');
    }
}
