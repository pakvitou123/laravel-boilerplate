<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->nullable;
            $table->integer('id_group')->nullable;
            $table->string('title');
            $table->text('description');

            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('id_group')
                ->references('id')
                ->on('groups')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}