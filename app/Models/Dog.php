<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;
    protected $table = 'dogs';

    protected $fillable = ['name', 'gender','likely_bday', 'species','external_property','interest','adoption_id'];

    protected $visible = ['id','name', 'gender','likely_bday', 'species','external_property','interest','adoption_id'];



    public function adoption() {
        return $this->belongsTo(Adoption::class);
    }
    
}
