<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_benefits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ad_id');
            $table->unsignedInteger('benefit_id');
            $table->timestamps();

            $table->foreign('ad_id')
                ->references('id')
                ->on('ads');
            
            $table->foreign('benefit_id')
                ->references('id')
                ->on('benefits');
            
            $table->unique(['ad_id', 'benefit_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_benefits');
    }
}
