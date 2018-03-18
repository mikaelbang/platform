<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ad_id');
            $table->unsignedInteger('tag_id');
            $table->timestamps();

            $table->foreign('ad_id')
                ->references('id')
                ->on('ads');
            
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags');
            
            $table->unique(['ad_id', 'tag_id']); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_tags');
    }
}
