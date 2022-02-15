<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    protected $table = 'cats';
    protected $fillable = ['name', 'gender','likely_bday', 'external_property','interest','adoption_id'];

    protected $visible = ['id','name', 'gender','likely_bday', 'external_property','interest','adoption_id'];

    public function adoption() {
        return $this->belongsTo(Adoption::class);
    }
    
}
