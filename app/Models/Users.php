<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Model
{
    //employee
    rotected $table = 'users';
    public $timestamps = false;
 
    protected $fillable = [
        'firstname',
        'surname',
        'email',
        'password',
        'active'
    ];
 
    protected $guarded = [
        'id'
    ];
 
    protected $hidden = ['password', 'remember_token'];
}
