<?php

use App\Models\ProgramHourAndDay;
use App\Models\ProgramType;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramapplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programapplications', function (Blueprint $table) {
            $table->id();
            $table->date("selected_date");
            $table->foreignIdFor(ProgramHourAndDay::class) //hour_day_id
                ->constrained()
                ->onDelete('cascade');
            $table->foreignIdFor(User::class) //user_id
                ->constrained()
                ->onDelete('cascade');
            $table->foreignIdFor(ProgramType::class) //program_id
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
        Schema::dropIfExists('programapplications');
    }
}
