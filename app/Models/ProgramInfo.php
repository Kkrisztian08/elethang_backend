<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramInfo extends Model
{
    use HasFactory;
    protected $table = 'program_infos';

    protected $fillable = ['type','date','time'];
    
    protected $visible = ['id','type','date','time'];

    public function programapplication() {
        return $this->hasMany(Programapplication::class);
    }
}
