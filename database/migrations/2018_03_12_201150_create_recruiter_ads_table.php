<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruiterAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruiter_ads', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('recruiter_id');
            $table->unsignedInteger('ad_id');
            $table->string('token');
            $table->timestamps();

            $table->foreign('ad_id')
                ->references('id')
                ->on('ads');
            
            $table->foreign('recruiter_id')
                ->references('id')
                ->on('users');
            
            $table->unique(['ad_id', 'recruiter_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruiter_ads');
    }
}
