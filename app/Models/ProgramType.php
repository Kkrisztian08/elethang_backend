<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramType extends Model
{
    use HasFactory;
    protected $table = 'program_types';

    public function programapplication() {
        return $this->hasMany(Programapplication::class);
    }

    
}
