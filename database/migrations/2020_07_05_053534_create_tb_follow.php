<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbFollow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_follow', function (Blueprint $table) {
            $table->integer('id_follow', true);
            $table->integer('id_user_following');
            $table->integer('id_user_followed');

            $table->foreign('id_user_following')->references('id_user')->on('tb_user')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('tb_follow');
    }
}
