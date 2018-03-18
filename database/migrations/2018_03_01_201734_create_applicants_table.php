<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('message')->nullable();
            $table->tinyInteger('rating')->nullable();
            $table->string('cv')->nullable();
            $table->unsignedInteger('ad_id');
            $table->unsignedInteger('recruiter_id');
            $table->timestamps();

            $table->foreign('ad_id')
                ->references('id')
                ->on('ads');

            $table->foreign('recruiter_id')
                ->references('id')
                ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
