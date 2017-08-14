<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProfessionalProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionalProfiless', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('businessname');
            $table->string('doctype')->nullable();
            $table->string('docnumber')->nullable();
            $table->string('taxstatus')->nullable();
            $table->string('comercialname')->nullable();
            $table->string('generalinfo')->nullable();
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('phone')->nullable();
            $table->string('cellphone')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionalProfiles');
    }
}
