<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';

    protected $fillable = ['name', 'email','password', 'birthday','address'];

    protected $visible = [
        'name', 
        'email', 
        'password',
        'birthday',
        'address',
        
    ];

    protected $hidden = [
        'password',
    ];
}
