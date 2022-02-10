<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramHourAndDay extends Model
{
    use HasFactory;
    protected $table = 'program_hour_and_days';

    public function programapplication() {
        return $this->hasMany(Programapplication::class);
    }
}
