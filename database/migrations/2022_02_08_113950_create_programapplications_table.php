<?php

use App\Models\ProgramInfo;
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
            $table->foreignIdFor(ProgramInfo::class)->nullable() //program_info_id
                ->constrained()
                ->onDelete('set null');
            $table->foreignIdFor(User::class)->nullable() //user_id
                ->constrained()
                ->onDelete('set null');
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
