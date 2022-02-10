<?php

use App\Models\Adoption;
use App\Models\VirtualAdoption;
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
            $table->foreignIdFor(Adoption::class) //adoption_id
                ->constrained()
                ->onDelete('cascade');
            $table->foreignIdFor(VirtualAdoption::class) //virtual_adoption_id
                ->constrained()
                ->onDelete('cascade');
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
