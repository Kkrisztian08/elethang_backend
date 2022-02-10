<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;
    protected $table = 'dogs';

    public function adoption() {
        return $this->belongsTo(Adoption::class);
    }
    public function virtualAdoption() {
        return $this->belongsTo(VirtualAdoption::class);
    }
}
