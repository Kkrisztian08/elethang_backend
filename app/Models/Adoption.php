<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Adoption extends Model
{
    use HasFactory;

    protected $table = 'adoptions';

    protected $fillable = ['user_id', 'adoption_beginning'];

    protected $visible = ['id','user_id', 'adoption_beginning'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function dog() {
        return $this->hasMany(Dog::class);
    }
    public function cat() {
        return $this->hasMany(Cat::class);
    }
}
