<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['username', 'email', 'PASSWORD', 'role'];
    protected $hidden = ['PASSWORD'];
}
