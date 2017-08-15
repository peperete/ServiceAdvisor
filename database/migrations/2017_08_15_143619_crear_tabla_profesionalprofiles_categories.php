<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProfesionalprofilesCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionalprofiles_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('status')->default('active');
            $table->integer('professionalprofile_id')->unsigned();
            $table->foreign('professionalprofile_id')->references('id')->on('professionalprofiles');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionalprofiles_categories');
    }
}
