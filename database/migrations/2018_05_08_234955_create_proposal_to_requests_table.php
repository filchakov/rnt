<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalToRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal_to_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('host_proposals_id');
            $table->integer('host_requests_id');

            $table->enum('host_match_result', [1, 0]);
            $table->dateTime('host_match_result_time_answer')->null();

            $table->enum('trevel_match_result', [1, 0]);
            $table->dateTime('trevel_match_result_time_answer')->null();

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
        Schema::dropIfExists('proposal_to_requests');
    }
}
