<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function adoption() {
        return $this->hasMany(Adoption::class);
    }

    public function virtualAdoption() {
        return $this->hasMany(VirtualAdoption::class);
    }
    public function programapplication() {
        return $this->hasMany(Programapplication::class);
    }

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['admin','name','username','email','password','birthday','address','email','email_verified_at','phone_number'];
    
    protected $visible = ['id','admin','name','username','email','password','birthday','address','email','email_verified_at','phone_number'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
