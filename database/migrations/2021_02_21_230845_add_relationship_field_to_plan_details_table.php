<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldToPlanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plan_details', function (Blueprint $table) {
            $table->unsignedInteger('plan_id');
            $table->foreign('plan_id', 'plan_fk_4280597')->references('id')->on('plans');
        });
    }

    
}
