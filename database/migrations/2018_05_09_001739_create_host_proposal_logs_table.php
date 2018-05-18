<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostProposalLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('host_proposal_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('host_proposals_id');
            $table->integer('available_seats_before');
            $table->integer('available_seats_after');
            $table->integer('status_before');
            $table->integer('status_after');
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
        Schema::dropIfExists('host_proposal_logs');
    }
}
