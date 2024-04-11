<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;


use App\Traits\FillableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable,FillableTrait;

    
    protected $fillable = [
        'email',
        'password',
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

   
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }
    
    public function soldProducts(){
        return $this->hasMany(User::class);
    }

    public function workers(){
        return $this->hasMany(Worker::class);
    }
}
