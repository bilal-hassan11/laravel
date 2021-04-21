<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public $timestamps = false ;
    
    protected $fillable = [
        'category_name',
        'sub_sub_category_of',
        'category_description',
        'sub_category_name',
        'sub_category_of',
        'sub_sub_category_name',

    ];
}
