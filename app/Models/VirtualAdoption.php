<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualAdoption extends Model
{
    use HasFactory;
    protected $table = 'virtual_adoptions';

    protected $fillable = ['adoption_beginning','user_id'];
    
    protected $visible = ['id','adoption_beginning','user_id'];

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
