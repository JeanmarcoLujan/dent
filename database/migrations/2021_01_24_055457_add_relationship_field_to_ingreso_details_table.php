<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldToIngresoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingreso_details', function (Blueprint $table) {
            $table->unsignedInteger('ingreso_id');
            $table->foreign('ingreso_id', 'ingreso_fk_1537597')->references('id')->on('ingresos');
        });
    }

    
}
