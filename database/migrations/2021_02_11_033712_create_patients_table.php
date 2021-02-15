<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni', 15)->unique();
            $table->string('firstname', 100)->nullable();
            $table->string('lastname', 100)->nullable();
            $table->date('birth');
            $table->string('sex');
            $table->string('address')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('apoderado', 200)->nullable();
            $table->integer('status')->default('1');
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
        Schema::dropIfExists('patients');
    }
}
