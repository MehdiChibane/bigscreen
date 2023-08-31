<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string('mail_address');
            $table->integer('age');
            $table->string('sex');
            $table->integer('nb_ppl');
            $table->string('job');
            $table->string('headset_type');
            $table->string('store_name');
            $table->string('future_headset_buy');
            $table->integer('nb_ppl_using_headset');
            $table->string('headset_usage');
            $table->string('headset_image_rating');
            $table->string('headset_interface_rating');
            $table->string('headset_network_rating');
            $table->string('headset_graphics_rating');
            $table->string('headset_audio_rating');
            $table->string('notification_setting');
            $table->string('join_via_phone');
            $table->string('save_tv_shows');
            $table->string('exclusive_games');
            $table->string('new_functionnality');
            $table->unsignedBigInteger('customer_id');
            $table->timestamps();
        });
        Schema::table('answers', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('answers');
    }
};
