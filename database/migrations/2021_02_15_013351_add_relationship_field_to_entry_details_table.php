<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldToEntryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entry_details', function (Blueprint $table) {
            $table->unsignedInteger('entry_id');
            $table->foreign('entry_id', 'entry_fk_2598597')->references('id')->on('entries');
        });
    }

    
}
