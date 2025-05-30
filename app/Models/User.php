<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class User extends Authenticatable
{
    protected $fillable = ['username', 'password', 'role'];

    protected $hidden = ['password'];

    public function getAuthIdentifierName()
    {
        return 'username'; // agar Auth pakai 'username' bukan 'email'
    }
}

