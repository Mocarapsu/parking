<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'color', 'license_plate'];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}