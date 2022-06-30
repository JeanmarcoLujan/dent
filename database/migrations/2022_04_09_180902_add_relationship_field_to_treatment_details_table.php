<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldToTreatmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('treatment_details', function (Blueprint $table) {
            //
        });

        Schema::table('treatment_details', function (Blueprint $table) {
            $table->unsignedInteger('treatment_id');
            $table->foreign('treatment_id', 'plan_fk_4246497')->references('id')->on('treatments');
        });
    }

    
}
