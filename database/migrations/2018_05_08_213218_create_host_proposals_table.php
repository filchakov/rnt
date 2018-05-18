<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('host_proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('facebook_user_id')->unsigned();
            $table->enum('status', [1, 0]);
            $table->integer('available_seats');
            $table->integer('total_seats');
            $table->integer('team_id');
            $table->text('introduction');
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
        Schema::dropIfExists('host_proposals');
    }
}
