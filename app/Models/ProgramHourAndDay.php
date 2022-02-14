<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramHourAndDay extends Model
{
    use HasFactory;
    protected $table = 'program_hour_and_days';

    protected $fillable = ['selected_date','time'];
    
    protected $visible = ['id','selected_date','time'];

    public function programapplication() {
        return $this->hasMany(Programapplication::class);
    }
}
