<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldToEgresoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('egreso_details', function (Blueprint $table) {
            $table->unsignedInteger('egreso_id');
            $table->foreign('egreso_id', 'egreso_fk_1537596')->references('id')->on('egresos');
        });
    }

    
}
