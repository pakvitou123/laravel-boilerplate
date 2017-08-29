<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_group');
            $table->boolean('priority');

            $table->foreign('id_user')
                ->references('id')
                ->on('users');
            $table->foreign('id_group')
                ->references('id')
                ->on('groups');
            $table->primary(['id_user', 'id_group']);
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
        Schema::dropIfExists('user__groups');
    }
}
