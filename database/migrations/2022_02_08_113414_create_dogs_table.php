<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("gender");
            $table->date("likely_bday");
            $table->string("species");
            $table->string("external_property");
            $table->integer("interest");
            $table->integer("adoption_id");
            $table->integer("virtual_adoption_id");
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
        Schema::dropIfExists('dogs');
    }
}
