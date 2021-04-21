<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csvdata extends Model
{
    use HasFactory;
    protected $table = 'csv';
    public $timestamps = FALSE;
}
