<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postimage extends Model
{
    use HasFactory;
    protected $table = 'postimages';

    protected $fillable = ['image', 'user_id', 'description'];

    protected $visible = ['id','image', 'user_id', 'description', 'updated_at'];
}
