<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptionType extends Model
{
    use HasFactory;

    protected $table = 'adoption_types';

    protected $fillable = ['type'];

    protected $visible = ['id','type'];

    public function adoption() {
        return $this->hasMany(Adoption::class);
    }
}
