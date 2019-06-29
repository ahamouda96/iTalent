<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow_system', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('follower_id')->unsigned()->nullable()->index();
            $table->integer('leader_id')->unsigned()->nullable()->index();
            $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('leader_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('follow_system');
    }
}
