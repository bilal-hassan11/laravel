<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name','description','category','price','available_quantity','color','photo'
    ];

    public function rating(){

        return $this->hasMany(Rating::class);
    }
}
