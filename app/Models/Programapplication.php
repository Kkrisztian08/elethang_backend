<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programapplication extends Model
{
    use HasFactory;

    protected $table = 'programapplications';

    protected $fillable = ['hour_day_id','user_id','program_type_id'];
    
    protected $visible = ['id','hour_day_id','user_id','program_type_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function programHourAndDay() {
        return $this->belongsTo(ProgramHourAndDay::class);
    }
    public function programType() {
        return $this->belongsTo(ProgramType::class);
    }
    
}
