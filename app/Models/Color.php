<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{

    protected $fillable = ['name', 'hex', 'image'];
    /** @use HasFactory<\Database\Factories\ColorFactory> */
    use HasFactory;
}
