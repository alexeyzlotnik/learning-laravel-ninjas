<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{

    protected $fillable = ['name', 'skill', 'bio', 'color_id'];

    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;

    public function color() {
        return $this->belongsTo(Color::class);
    }
}
