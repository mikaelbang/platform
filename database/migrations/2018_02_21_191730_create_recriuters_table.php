<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecriutersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recriuters', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('lft');
            $table->integer('rgt');
            $table->timestamps();

            $table->foreign('user_id')
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
        Schema::dropIfExists('recriuters');
    }
}
