<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_user_active')->unsigned();
            $table->integer('id_user_passive')->unsigned();
            $table->integer('id_group')->unsigned();
            $table->enum('action',['invite', 'request', 'delete', 'accept', 'comfirm']);
            $table->boolean('seeing');

            $table->foreign('id_user_active')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('id_user_passive')
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
        Schema::dropIfExists('notifications');
    }
}
