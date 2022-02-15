<?php

use App\Models\AdoptionType;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoptions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AdoptionType::class) //adoption_type_id
                ->constrained()
                ->onDelete('cascade');
            $table->foreignIdFor(User::class) //user_id
                ->constrained()
                ->onDelete('cascade');
            $table->date("adoption_beginning");
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
        Schema::dropIfExists('adoptions');
    }
}
