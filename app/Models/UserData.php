<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class UserData extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'type','name', 'email','phone','city'
    ];
}
 