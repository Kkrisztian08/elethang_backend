<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';

    protected $fillable = ['event_name','description', 'date'];

    protected $visible = ['id','event_name' ,'description' , 'date'];
}
