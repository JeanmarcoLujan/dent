<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldToIndicatorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('indicator_details', function (Blueprint $table) {
            $table->unsignedInteger('indicator_id');
            $table->foreign('indicator_id', 'indicator_fk_4237397')->references('id')->on('indicators');
        });
    }

    
}
