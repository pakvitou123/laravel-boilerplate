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
            $table->increments('id');
            $table->integer('id_user_active');
            $table->integer('id_user_passive');
            $table->integer('id_group');
            $table->enum('action',['invite', 'request', 'delete', 'accept', 'comfirm']);
            $table->boolean('seeing');

            $table->foreign('id_user_active')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('id_user_passive')
                ->references('id')
                ->on('users');
            $table->foreign('id_group')
                ->references('id')
                ->on('groups');
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
