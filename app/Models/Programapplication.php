<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programapplication extends Model
{
    use HasFactory;

    protected $table = 'programapplications';

    protected $fillable = ['program_info_id','user_id'];
    
    protected $visible = ['id','program_info_id','user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function programInfo() {
        return $this->belongsTo(ProgramInfo::class);
    }
    
}
