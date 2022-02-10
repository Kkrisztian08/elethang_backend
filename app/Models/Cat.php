<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    protected $table = 'cats';

    public function adoption() {
        return $this->belongsTo(Adoption::class);
    }
    public function virtualAdoption() {
        return $this->belongsTo(VirtualAdoption::class);
    }
}
