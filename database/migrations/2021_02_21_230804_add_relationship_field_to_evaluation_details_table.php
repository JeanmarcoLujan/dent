<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldToEvaluationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evaluation_details', function (Blueprint $table) {
            $table->unsignedInteger('evaluation_id');
            $table->foreign('evaluation_id', 'evaluation_fk_4288597')->references('id')->on('evaluations');
        });
    }

    
}
